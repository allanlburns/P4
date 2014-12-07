<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('comic_store', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('comic_id')->unsigned();
			$table->integer('store_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('comic_id')->references('id')->on('comics');
			$table->foreign('store_id')->references('id')->on('stores');
			
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
		Schema::drop('comic_store');
	}

}
