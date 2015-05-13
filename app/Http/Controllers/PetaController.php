<?php namespace App\Http\Controllers;
use App\Models\Pemilik;
use App\Models\Sppf;
use App\Models\SuratRiwayatPemilikTanah;
use App\Models\Tanah;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PetaController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function render($id){
        $tanah = Tanah::find($id);
        return view('peta/view')
            ->with('tanah', $tanah);
    }
}
