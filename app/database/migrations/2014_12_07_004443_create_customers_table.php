<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Customers Table
		Schema::create('customers', function($table) {

			$table->increments('id');

			$table->timestamps();

			$table->string('first_name');
			$table->string('last_name');
			$table->string('email', '320');
			$table->string('address');
			$table->string('phone');
			$table->string('birthday');
			$table->integer('store_id')->unsigned();
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
		//Drop 'em
		Schema::drop('customers');

	}

}
