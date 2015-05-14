<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratRiwayatPemilikTanah extends Model {

    protected $table = 'surat_riwayat_pemilik_tanah';

    protected $fillable = ['tanah_id', 'no_surat', 'nama_lurah', 'tanggal', 'nip_lurah', 'saksi_1', 'saksi_2', 'pemohon','status'];


}
