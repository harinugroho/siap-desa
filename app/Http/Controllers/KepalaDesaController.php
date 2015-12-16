<?php
/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 06/06/15
 * Time: 1:19
 */

namespace app\Http\Controllers;


use App\Models\Konflik;

class KepalaDesaController extends Controller {
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('kepdes');
    }

    public function getAllKonflik(){
        $konflik = Konflik::all();
        $status = array("Diajukan", "Disetujui Kepala Desa, Belum Terselesaikan", "Tidak Disetujui Kepala Desa", "Terselesaikan", "Dibatalkan");
        return view('konflik.all')
            ->with('status', $status)
            ->with('konflik', $konflik);
    }
    public function setuju($id){
        $konflik = Konflik::find($id);
        if ($konflik->konflik_id != 0){
            $konflik_lain = Konflik::find($konflik->konflik_id);
            $konflik_lain->status = 3;
            $konflik_lain->save();
            $konflik->status = 3;
        } else {
            $konflik->status = 1;
        }
        $konflik->save();
        return $this->getAllKonflik();
    }
    public function tolak($id){
        $konflik = Konflik::find($id);
        $konflik->status = 2;
        $konflik->save();
        return $this->getAllKonflik();
    }
}