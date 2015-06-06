<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konflik extends Model {

    protected $table = 'konflik';

    protected $fillable = ['tanah_id', 'konflik_id', 'pengaju', 'judul', 'deskripsi', 'status', 'jenis'];


}
