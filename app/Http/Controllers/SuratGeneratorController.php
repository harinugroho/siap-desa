<?php
/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 29/04/15
 * Time: 21:54
 */

namespace App\Http\Controllers;

use App\Models\Pemilik;
use App\Models\RiwayatPemilikTanah;
use App\Models\Sppf;
use App\Models\SuratRiwayatPemilikTanah;
use App\Models\Tanah;
use Illuminate\Support\Facades\Crypt;

class SuratGeneratorController extends Controller {

    public function index($hashed)
    {
        $hashed = substr($hashed,0,strlen($hashed)-3);
        $ket = Crypt::decrypt($hashed);
        if ("sppf" == $ket['jenis']){
            return SuratGeneratorController::sppf($ket['id']);
        } elseif ("riwayat_pemilik" == $ket['jenis']) {
            return SuratGeneratorController::riwayat($ket['id']);
        };
    }
    public function sppf($id)
    {
        $order['sppf'] = Sppf::find($id);
        $order['tanah'] = Tanah::find($order['sppf']->tanah_id);
        $order['pemilik'] = Pemilik::find($order['tanah']->pemilik_id);
        $order['umur'] = (date("Y")-(new \DateTime($order['pemilik']->tanggal_lahir))->format("Y"));
        $order['tanggal'] = ((new \DateTime($order['sppf']->created_at))->format("d m Y"));

        // keterangan untuk suratnya, beserta id surat
        // di-hash untuk digenerate jadi qr code
        $ket = array(
            "jenis" => "sppf",
            "id" => $id
        );
        $hashed = (Crypt::encrypt($ket));
        $order['hashed'] = $hashed;
        return \PDF::loadView('pdf/sppf', compact('order'))->setPaper('A4')->download('download.pdf');
    }

    public function riwayat($id){
        $data['surat'] = SuratRiwayatPemilikTanah::find($id);
        $data['tanah'] = Tanah::find($data['surat']->tanah_id);
        $data['riwayat'] = RiwayatPemilikTanah::where('tanah_id', $data['tanah']->id)->orderBy('created_at', 'desc')->get();
        $data['pemilik'] = Pemilik::find($data['tanah']->pemilik_id);

        $ket = array(
            "jenis" =>"riwayat_pemilik",
            "id" => $id
        );
        $hashed = Crypt::encrypt($ket);
        $data['hashed'] = $hashed;
        return \PDF::loadView('pdf/riwayat', compact('data'))->setPaper('A4')->stream();
    }

}
