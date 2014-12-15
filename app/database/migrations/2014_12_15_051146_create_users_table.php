<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) {

    $table->increments('id');
    $table->string('first_name');
	$table->string('last_name');
	$table->string('email')->unique();
	$table->string('address');
	$table->string('phone');
	$table->string('birthday');
	$table->integer('store_id')->unsigned();
	$table->foreign('store_id')->references('id')->on('stores');
    $table->string('remember_token',100); 
    $table->string('password');
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
		Schema::drop('users');
	}

}
