<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPemilikTanahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riwayat_pemilik_tanah', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tanah_id');
            $table->foreign('tanah_id')->references('id')->on('tanah');
            $table->string('nama');
            $table->string('no_buku_c');
            $table->date('tanggal');
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
		Schema::drop('riwayat_pemilik_tanah');
	}

}
