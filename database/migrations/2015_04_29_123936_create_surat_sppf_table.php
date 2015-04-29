<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratSppfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surat_sppf', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tanah_id')->unique();
            $table->foreign('tanah_id')->references('id')->on('tanah');
            $table->string('nama_1');
            $table->integer('umur_1');
            $table->string('pekerjaan_1');
            $table->string('alamat_1');
            $table->string('nama_2');
            $table->integer('umur_2');
            $table->string('pekerjaan_2');
            $table->string('alamat_2');
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
		Schema::drop('surat_sppf');
	}

}
