<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tanah', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pemilik_id');
            $table->foreign('pemilik_id')->references('id')->on('pemilik');
            $table->string('no_sppt_pbb')->unique();
            $table->string('nama');
            $table->string('jalan');
            $table->string('rt');
            $table->string('rw');
            $table->integer('kodepos');
            $table->string('desa');
            $table->string('kabupaten');
            $table->string('nama_sebelum');
            $table->integer('diperoleh_tahun');
            $table->string('batas_utara');
            $table->string('batas_selatan');
            $table->string('batas_timur');
            $table->string('batas_barat');
            $table->unsignedInteger('luas');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tanah');
	}

}
