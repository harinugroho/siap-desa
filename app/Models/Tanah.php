<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tanah';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pemilik_id', 'no_sppt_pbb','no_buku_c', 'no_persil', 'blok', 'kampung', 'kecamatan', 'nama', 'jalan', 'rt', 'rw', 'kodepos', 'desa', 'kabupaten', 'nama_sebelum', 'diperoleh_tahun','batas_utara', 'batas_selatan', 'batas_barat', 'batas_timur', 'luas'];

}
