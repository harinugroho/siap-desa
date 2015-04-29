<?php namespace App\Models;

/**
 * Created by PhpStorm.
 * User: wahyuoi
 * Date: 24/04/15
 * Time: 19:37
 */

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pemilik';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'no_ktp', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'pekerjaan'];

}
