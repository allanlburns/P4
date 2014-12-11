<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create comic_user pivot table
		Schema::create('comic_user', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('comic_id')->unsigned();
			$table->integer('user_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('comic_id')->references('id')->on('comics');
			$table->foreign('user_id')->references('id')->on('users');
			
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//drop 'em

		Schema::drop('comic_user');
	
	}

}
