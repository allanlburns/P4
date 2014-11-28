<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Comics Table
		Schema::create('comics', function($table) {

			$table->increments('id');

			$table->timestamps();

			$table->string('title');
			$table->string('publisher');
						
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
		Schema::drop('comics');
	}

}
