<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koordinat extends Model {

    protected $table = 'koordinat';

    protected $fillable = ['tanah_id', 'longitude', 'latitude', 'urutan'];

}
