<?php namespace App\Http\Controllers;
use App\Models\Koordinat;
use App\Models\Tanah;

class PetaController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function render($id){
        $koordinat = Koordinat::where("tanah_id", $id)->get();
        $tanah = Tanah::find($id);
        return view('peta/view')
            ->with('tanah', $tanah)
            ->with("koordinat", $koordinat);
    }
}
