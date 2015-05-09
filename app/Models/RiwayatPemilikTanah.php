<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatPemilikTanah extends Model {

    protected $table = 'riwayat_pemilik_tanah';

    protected $fillable = ['tanah_id', 'nama', 'no_buku_c', 'tanggal'];


}
