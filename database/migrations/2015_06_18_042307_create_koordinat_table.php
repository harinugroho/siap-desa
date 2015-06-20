<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoordinatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('koordinat', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tanah_id');
            $table->foreign('tanah_id')->references('id')->on('tanah');
            $table->double('longitude');
            $table->double('latitude');
            $table->integer('urutan');
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
		//
	}

}
