<?php namespace App\Http\Controllers;

use App\Models\Sppf;
use App\Models\SuratRiwayatPemilikTanah;

class PemohonController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sppf = Sppf::join('tanah','surat_sppf.tanah_id','=','tanah.id')->get(array('no_persil','pemohon', 'tanah_id', 'status'));
        $riwayat = SuratRiwayatPemilikTanah::join('tanah','surat_riwayat_pemilik_tanah.tanah_id','=','tanah.id')->get(array('no_persil','pemohon', 'tanah_id', 'status'));
        return view('pemohon_surat/index')
            ->with('riwayat', $riwayat)
            ->with('sppf', $sppf);
//        089607840842
	}

}
