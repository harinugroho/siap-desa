<?php
/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 29/04/15
 * Time: 20:48
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sppf extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'surat_sppf';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tanah_id', 'nama_1', 'pekerjaan_1', 'umur_1', 'alamat_1', 'nama_2', 'pekerjaan_2', 'umur_2', 'alamat_2', 'pemohon', 'status'];

}
