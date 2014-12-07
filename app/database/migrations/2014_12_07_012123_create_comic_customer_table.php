<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create comic_customer pivot table
		Schema::create('comic_customer', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('comic_id')->unsigned();
			$table->integer('customer_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('comic_id')->references('id')->on('comics');
			$table->foreign('customer_id')->references('id')->on('customers');
			
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

		Schema::drop('comic_customer');
	
	}

}
