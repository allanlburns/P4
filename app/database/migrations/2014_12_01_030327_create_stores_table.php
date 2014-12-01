<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Stores Table
		Schema::create('stores', function($table) {

			$table->increments('id');

			$table->timestamps();

			$table->string('store_name');
			
						
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Drop Stores Table
		Schema::drop('stores');


	}

}
