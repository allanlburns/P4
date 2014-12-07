<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyFieldToCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('customers', function($table) {
			$table->integer('store_id')->unsigned();

			$table->foreign('store_id')->references('id')->on('stores');
		})
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('customers', function($table)
			$table->dropColumn('store_id');
	}

}
