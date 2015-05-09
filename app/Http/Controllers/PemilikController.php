<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pemilik;
use App\Models\Tanah;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Request;


class PemilikController extends Controller {

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
        //TODO create view of list pemilik
        $pemilik = Pemilik::all();
		return view('pemilik.index')->with('pemilik', $pemilik);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view("pemilik/create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
        $rules = array(
            'nama' => 'required',
            'no_ktp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to('pemilik/create')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $Pemilik::create($input);
            Session::flash('message', 'Data identitas berhasil dimasukkan!');
            return Redirect::to('pemilik');
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
        $pemilik = Pemilik::find($id);
        $tanah = Tanah::where('pemilik_id', $id)->get();
		return view('pemilik/view')
            ->with("pemilik", $pemilik)
            ->with('tanah', $tanah);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pemilik = Pemilik::find($id);
        return view('pemilik/edit')->with("pemilik", $pemilik);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $input = Request::except('_method', '_token');
        $rules = array(
            'nama' => 'required',
            'no_ktp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to('pemilik/'.$input['id'].'/edit')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $pemilik = Pemilik::find($input['id']);
            $pemilik->nama = $input['nama'];
            $pemilik->no_ktp = $input['no_ktp'];
            $pemilik->tempat_lahir = $input['tempat_lahir'];
            $pemilik->tanggal_lahir = $input['tanggal_lahir'];
            $pemilik->agama = $input['agama'];
            $pemilik->pekerjaan = $input['pekerjaan'];
            $pemilik->alamat = $input['alamat'];
            $pemilik->save();
            Session::flash('message', 'Data identitas berhasil diubah!');
            return Redirect::to('pemilik');
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
