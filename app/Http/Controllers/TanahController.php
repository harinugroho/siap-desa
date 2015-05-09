<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sppf;
use App\Models\Tanah;
use App\Models\Pemilik;
use App\Models\RiwayatPemilikTanah;
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
     *  Show the form for creating a new resource with unknown owner
     */
    public function createUnknown()
    {
        $pemiliks = Pemilik::all(["id", "nama", "no_ktp"]);
        return view('tanah/createUnknown')
            ->with('pemiliks', $pemiliks);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        // get data pemilik
        $pemilik = Pemilik::find($input['pemilik_id']);
        $input['nama'] = $pemilik->nama;
        $rules = array(
            'pemilik_id' => 'required',
            'no_sppt_pbb' => 'required',
            'no_buku_c' => 'required',
            'jalan' => 'required',
            'desa' => 'required',
            'nama_sebelum' => 'required',
            'nama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kodepos' => 'required|numeric',
            'kabupaten' => 'required',
            'diperoleh_tahun' => 'required|numeric',
            'batas_utara' => 'required',
            'batas_selatan' => 'required',
            'batas_barat' => 'required',
            'batas_timur' => 'required',
            'luas' => 'required|numeric'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            // redirect to form without pemilik_id
            if ("unkown" == ($input['_mode'])) {
                return Redirect::to("tanah/create")
                    ->withErrors($validator)
                    ->withInput($input);
            } else {
                return Redirect::to("tanah/".$input['pemilik_id']."/create")
                    ->withErrors($validator)
                    ->withInput($input);
            }
        } else {
            $tanah = Tanah::create($input);
            // add pemilik to riwayat tanah
            $riwayat = array('tanah_id' => $tanah->id, 'nama' => $input['nama'], 'no_buku_c' => $input['no_buku_c'], 'tanggal' => date("Y-m-d"));
            RiwayatPemilikTanah::create($riwayat);
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

    /**
     * menampilkan semua riwayat pemilik suatu tanah
     * @param int $id -> id tanah
     * @return response
     */
    public function riwayat_show($id){
        $riwayat = RiwayatPemilikTanah::where('tanah_id', $id)->get();
        $tanah = Tanah::find($id);
        return view('riwayatpemilik/view')
            ->with("riwayat", $riwayat)
            ->with('tanah', $tanah);
    }

    /**
     * Menampilkan form untuk menambah riwayat kepemilikan suatu tanah
     * @param int $id -> id tanah
     * @return response
     */
    public function riwayat_create($id){
        $tanah = Tanah::find($id);
        return view('riwayatpemilik/create')
            ->with('tanah', $tanah);
    }

    /**
     * Store to database
     */
    public function riwayat_store()
    {
        $input = Input::except('_token');
        for($ii=0; $ii<count($input['nama']); ++$ii){
            $arr = array(
                'tanah_id' => $input['tanah_id'],
                'nama' => $input['nama'][$ii],
                'no_buku_c' => $input['no_buku_c'][$ii],
                'tanggal' => $input['tanggal'][$ii]
            );
            RiwayatPemilikTanah::create($arr);
        }
        Session::flash('message', 'Data riwayat pemilik tanah berhasil dimasukkan!');
        return Redirect::to("/tanah/riwayat/".$input["tanah_id"]);
    }

    /**
     * Hapus satu riwayat pemilik berdasar id riwayat tersebut
     */
    public function riwayat_destroy($id){
        $riwayat = RiwayatPemilikTanah::find($id);
        $riwayat->delete();
        Session::flash('message', 'Data riwayat pemilik tanah berhasil dihapus!');
        return Redirect::to("/tanah/riwayat/".Input::get("_tanah_id"));
    }

    /**
     * tampilkan form edit
     */
    public function riwayat_edit($id){
        $riwayat = RiwayatPemilikTanah::find($id);
        $tanah = Tanah::find($riwayat->tanah_id);
        return view('riwayatpemilik/edit')
            ->with('tanah', $tanah)
            ->with('riwayat', $riwayat);
    }

    /**
     * simpan update dari perubahan riwayat
     */
    public function riwayat_update($id){
        $input = Input::except('_method', '_token');
        $rules = array(
            'nama' => 'required',
            'no_buku_c' => 'required',
            'tanggal' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to('tanah/riwayat/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $riwayat = RiwayatPemilikTanah::find($id);
            $riwayat->nama = $input['nama'];
            $riwayat->tanggal = $input['tanggal'];
            $riwayat->no_buku_c = $input['no_buku_c'];
            $riwayat->save();
            Session::flash('message', 'Data riwayat pemilik tanah berhasil diubah!');
            return Redirect::to("/tanah/riwayat/$riwayat->tanah_id");
        }
    }

}
