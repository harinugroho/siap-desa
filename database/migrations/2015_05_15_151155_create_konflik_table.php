<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonflikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('konflik', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tanah_id');
            $table->foreign('tanah_id')->references('id')->on('tanah');
            $table->unsignedInteger('konflik_id')->null();
            $table->string('pengaju');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('penerima');
            $table->integer('status');
            $table->integer('jenis');
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
		Schema::drop('konflik');
	}

}
