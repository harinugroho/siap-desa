<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sppf;
use App\Models\Tanah;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TanahController extends Controller {

    function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tanah = Tanah::all();
        return view('tanah/index')
            ->with("tanah", $tanah);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
        $pemilik = Pemilik::find($id);
		return view('tanah/create')
            ->with("pemilik", $pemilik);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        $rules = array(
            'pemilik_id' => 'required',
            'no_sppt_pbb' => 'required',
            'jalan' => 'required',
            'desa' => 'required',
            'nama_sebelum' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kodepos' => 'required',
            'kabupaten' => 'required',
            'diperoleh_tahun' => 'required',
            'batas_utara' => 'required',
            'batas_selatan' => 'required',
            'batas_barat' => 'required',
            'batas_timur' => 'required',
            'luas' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to("tanah/".$input['pemilik_id']."/create")
                ->withErrors($validator)
                ->withInput($input);
        } else {
            Tanah::create($input);
            Session::flash('message', 'Data tanah berhasil dimasukkan!');
            return Redirect::to('pemilik/'.$input['pemilik_id']);
        }
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
    {
        $tanah = Tanah::find($id);
        $sppf = Sppf::where('tanah_id', $id)->get();
        return view('tanah/view')
            ->with('allSppf', $sppf)
            ->with("tanah", $tanah);
    }

    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $tanah = Tanah::find($id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        return view('tanah/edit')
            ->with("tanah", $tanah)
            ->with("pemilik", $pemilik);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $input = Input::except('_method', '_token');
        $rules = array(
            'pemilik_id' => 'required',
            'no_sppt_pbb' => 'required',
            'jalan' => 'required',
            'desa' => 'required',
            'nama_sebelum' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kodepos' => 'required',
            'kabupaten' => 'required',
            'diperoleh_tahun' => 'required',
            'batas_utara' => 'required',
            'batas_selatan' => 'required',
            'batas_barat' => 'required',
            'batas_timur' => 'required',
            'luas' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to('tanah/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $tanah = Tanah::find($id);
            $tanah->pemilik_id = $input['pemilik_id'];
            $tanah->no_sppt_pbb = $input['no_sppt_pbb'];
            $tanah->jalan = $input['jalan'];
            $tanah->desa = $input['desa'];
            $tanah->nama_sebelum = $input['nama_sebelum'];
            $tanah->nama = $input['nama'];
            $tanah->rt = $input['rt'];
            $tanah->rw = $input['rw'];
            $tanah->kodepos = $input['kodepos'];
            $tanah->kabupaten = $input['kabupaten'];
            $tanah->diperoleh_tahun = $input['diperoleh_tahun'];
            $tanah->batas_utara = $input['batas_utara'];
            $tanah->batas_selatan = $input['batas_selatan'];
            $tanah->batas_barat = $input['batas_barat'];
            $tanah->batas_timur = $input['batas_timur'];
            $tanah->luas = $input['luas'];
            $tanah->save();
            Session::flash('message', 'Data tanah berhasil diubah!');
            return Redirect::to("pemilik/$tanah->pemilik_id");
        }
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
