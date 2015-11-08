<?php
/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 05/06/15
 * Time: 22:31
 */

namespace app\Http\Controllers;


use App\Http\Requests\Request;
use App\Models\Konflik;
use App\Models\Pemilik;
use App\Models\Tanah;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KonflikController extends Controller {
    function __construct()
    {
        $this->middleware('auth');
    }

    public function getKonflikById($id){
        $tanah = Tanah::find($id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        $konflik = Konflik::where('tanah_id', $id)->get();
        $status = array("Diajukan", "Disetujui Kepala Desa, Belum Terselesaikan", "Tidak Disetujui Kepala Desa", "Terselesaikan", "Dibatalkan");
        return view('konflik.index')
            ->with('tanah', $tanah)
            ->with('pemilik', $pemilik)
            ->with('konflik', $konflik)
            ->with("status", $status);
    }

    public function create($id){
        $tanah = Tanah::find($id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        return view('konflik.create')
            ->with('pemilik', $pemilik)
            ->with('tanah', $tanah);
    }

    public function store(){
        $input = Input::except('_token');
        $rules = array(
            'pengaju' => 'required',
            'judul' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to("/konflik/".$input['tanah_id']."/create")
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $input['konflik_id'] = 0;
            $input['status'] = 0;
            $input['penerima'] = Auth::user()->name;
            Konflik::create($input);
            Session::flash('message', 'Data pengajuan konflik berhasil dimasukkan!');
            return Redirect::to("/konflik/".$input['tanah_id']);
        }
    }
    public function solve($id){
        $konflik = Konflik::find($id);
        $tanah = Tanah::find($konflik->tanah_id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        return view('konflik.solve')
            ->with('konflik', $konflik)
            ->with('pemilik', $pemilik)
            ->with('tanah', $tanah);
    }

    public function batal($id){
        $konflik = Konflik::find($id);
        $konflik->status = 4;
        $konflik->save();
        return Redirect::to("konflik/$konflik->tanah_id");
    }

    public function storeSolve(){
        $input = Input::except('_token');
        $rules = array(
            'pengaju' => 'required',
            'judul' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to("/konflik/".$input['tanah_id']."/create")
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $input['status'] = 0;
            Konflik::create($input);
            Session::flash('message', 'Data pengajuan konflik berhasil dimasukkan!');
            return Redirect::to("/konflik/".$input['tanah_id']);
        }
    }
}