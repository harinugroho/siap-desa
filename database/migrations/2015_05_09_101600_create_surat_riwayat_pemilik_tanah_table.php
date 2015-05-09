<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratRiwayatPemilikTanahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surat_riwayat_pemilik_tanah', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tanah_id')->unique();
            $table->foreign('tanah_id')->references('id')->on('tanah');
            $table->string('no_surat');
            $table->string('nama_lurah');
            $table->string('nip_lurah');
            $table->string('saksi_1');
            $table->string('saksi_2');
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
		Schema::drop('surat_riwayat_pemilik_tanah');
	}

}
