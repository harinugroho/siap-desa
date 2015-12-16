<?php namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\RiwayatPemilikTanah;
use App\Models\Sppf;
use App\Models\SuratRiwayatPemilikTanah;
use Illuminate\Support\Facades\Input;

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
	}

    public function bayarSurat($surat, $id){
        $no = Input::get('no_kuitansi');
        if ($surat == "sppf") {
            $sppf = Sppf::find($id);
            if ($sppf->status == 0) {
                $cnt = Counter::where('nama', 'kuitansi')->firstOrFail();
                $cnt->counter = 1;;
                $cnt->save();
                $sppf->status = $cnt->counter;
                $sppf->save();
            }
            $data['no'] = $no;
            $data['nama'] = $sppf->pemohon;
            $data['keterangan'] = "Pembayaran Permohonan Surat Pernyataan Penguasaan Fisik";
        } else if ($surat == "riwayat") {
            $riwayat = SuratRiwayatPemilikTanah::find($id);
            if ($riwayat->status == 0){
                $cnt = Counter::where('nama', 'kuitansi')->firstOrFail();
                $cnt->counter = 1;;
                $cnt->save();
                $riwayat->status = $cnt->counter;
                $riwayat->save();
            }
            $data['no'] = $no;
            $data['nama'] = $riwayat->pemohon;
            $data['keterangan'] = "Pembayaran Permohonan Surat Keterangan Riwayat Pemilik Tanah";
        }
        $data['nominal'] = "5000";
        $data['terbilang'] = "Lima Ribu Rupiah";
        $bulan = array(
            '01'=>'Januari',
            '02'=>'Pebruari',
            '03'=>'Maret',
            '04'=>'April',
            '05'=>'Mei',
            '06'=>'Juni',
            '07'=>'Juli',
            '08'=>'Agustus',
            '09'=>'September',
            '10'=>'Oktober',
            '11'=>'November',
            '12'=>'Desember');
        $tgl = date('d');
        $mnt = $bulan[date('m')];
        $th = date('Y');
        $data['tanggal'] = $tgl." ".$mnt." ".$th;
        return \PDF::loadView('pdf/kuitansi', compact('data'))->setPaper('A4')->download('kuitansi_'.$data['no'].'.pdf');//stream();
    }
}
