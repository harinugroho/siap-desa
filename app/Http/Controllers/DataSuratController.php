<?php namespace App\Http\Controllers;
use App\Models\Pemilik;
use App\Models\Sppf;
use App\Models\SuratRiwayatPemilikTanah;
use App\Models\Tanah;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

/**
 * Class DataSuratController
 * @package App\Http\Controllers
 *
 * Controller untuk input/update data semua surat
 * Tidak ada generate PDF disini
 */
class DataSuratController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sppf_create($id)
    {
        $tanah = Tanah::find($id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        return view('surat/sppf/create')
            ->with("tanah", $tanah)
            ->with("pemilik", $pemilik);
    }

    public function sppf_edit($id)
    {
        $sppf = Sppf::find($id);
        $tanah = Tanah::find($sppf->tanah_id);
        $pemilik = Pemilik::find($tanah->pemilik_id);
        return view('surat/sppf/edit')
            ->with("tanah", $tanah)
            ->with("sppf", $sppf)
            ->with("pemilik", $pemilik);
    }

    public function sppf_store($id)
    {
        $input = Input::all();
        $rules = array(
            'nama_1' => 'required',
            'pekerjaan_1' => 'required',
            'alamat_1' => 'required',
            'umur_1' => 'required|numeric',
            'nama_2' => 'required',
            'pekerjaan_2' => 'required',
            'alamat_2' => 'required',
            'umur_2' => 'required|numeric',
            'tanah_id' => 'required|numeric'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return Redirect::to('surat/sppf/'.$id.'/create')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            Sppf::create($input);
            Session::flash('message', 'Data Surat Pernyataan Penguasaan Fisik berhasil dimasukkan!');
            return Redirect::to('tanah/'.$id);
        }
    }

    public function sppf_update($id)
    {
        $input = Input::all();
        $rules = array(
            'nama_1' => 'required',
            'pekerjaan_1' => 'required',
            'alamat_1' => 'required',
            'umur_1' => 'required|numeric',
            'nama_2' => 'required',
            'pekerjaan_2' => 'required',
            'alamat_2' => 'required',
            'umur_2' => 'required|numeric',
            'tanah_id' => 'required|numeric'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return Redirect::to('surat/sppf/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $sppf = Sppf::find($id);
            $sppf->nama_1 = $input['nama_1'];
            $sppf->pekerjaan_1 = $input['pekerjaan_1'];
            $sppf->umur_1 = $input['umur_1'];
            $sppf->alamat_1 = $input['alamat_1'];
            $sppf->nama_2 = $input['nama_2'];
            $sppf->pekerjaan_2 = $input['pekerjaan_2'];
            $sppf->umur_2 = $input['umur_2'];
            $sppf->alamat_2 = $input['alamat_2'];
            $sppf->save();
            Session::flash('message', 'Data Surat Pernyataan Penguasaan Fisik berhasil diubah!');
            return Redirect::to('tanah/'.$id);
        }
    }

    // Surat Riwayat
    public function surat_riwayat_create($id){
        $tanah = Tanah::find($id);
        return view('surat/riwayat/create')
            ->with("tanah", $tanah);
    }

    public function surat_riwayat_store($id){
        $input = Input::all();
        $rules = array(
            'no_surat' => 'required',
            'nama_lurah' => 'required',
            'nip_lurah' => 'required',
            'tanggal' => 'required',
            'saksi_1' => 'required',
            'saksi_2' => 'required',
            'pemohon' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return Redirect::to('surat/riwayat/'.$id.'/create')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            $input['tanah_id'] = $id;
            (SuratRiwayatPemilikTanah::create($input));
            Session::flash('message', 'Data Surat Keterangan Riwayat Tanah berhasil dimasukkan!');
            return Redirect::to('tanah/'.$id);
        }
    }

    public function surat_riwayat_edit($id) {
        $riwayat = SuratRiwayatPemilikTanah::find($id);
        $tanah = Tanah::find($riwayat->tanah_id);

        return view('surat/riwayat/edit')
            ->with('tanah', $tanah)
            ->with('riwayat', $riwayat);
    }

    public function surat_riwayat_update($id){
        $input = Input::all();
        $rules = array(
            'no_surat' => 'required',
            'nama_lurah' => 'required',
            'nip_lurah' => 'required',
            'tanggal' => 'required',
            'saksi_1' => 'required',
            'saksi_2' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return Redirect::to('surat/riwayat/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            var_dump($id);
            $riwayat = SuratRiwayatPemilikTanah::find($id);
            $riwayat->no_surat = $input['no_surat'];
            $riwayat->nama_lurah = $input['nama_lurah'];
            $riwayat->nip_lurah = $input['nip_lurah'];
            $riwayat->tanggal = $input['tanggal'];
            $riwayat->saksi_1 = $input['saksi_1'];
            $riwayat->saksi_2 = $input['saksi_2'];
            $riwayat->save();
            Session::flash('message', 'Data Surat Keterangan Riwayat Tanah berhasil diubah!');
            return Redirect::to('tanah/'.$riwayat->tanah_id);
        }
    }

}
