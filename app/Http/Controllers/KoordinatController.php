<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Koordinat;
use App\Models\Tanah;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KoordinatController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
        $tanah = Tanah::find($id);
        $koordinat = Koordinat::where('tanah_id', $id)->get();
		return view('koordinat.view')
            ->with("tanah", $tanah)
            ->with("koordinat", $koordinat);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
        $rules = array(
            "longitude" => 'numeric|required',
            "latitude" => 'numeric|required',
        );
        $input = Request::except('_token');
        $input['tanah_id'] = $id;
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return Redirect::to("/tanah/$id/koordinat")
                ->withErrors($validator)
                ->withInput($input);
        } else {
            Koordinat::create($input);
            Session::flash('message', "Koordinat berhasil dimasukkan!");
            return Redirect::to("/tanah/$id/koordinat");
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($tanah_id, $id)
	{
		$koor = Koordinat::find($id);
        $koor->delete();
        Session::flash('message', 'Data koordinat berhasil dihapus!');
        return Redirect::to("tanah/$tanah_id/koordinat");
	}

}
