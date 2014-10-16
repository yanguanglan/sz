<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockpackageDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockpackage_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('package_id')->index();
			$table->string('item', 32);
			$table->integer('quantity');
			$table->integer('position');
			$table->integer('identity');
			$table->boolean('status', 0);
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
		Schema::drop('stockpackage_details');
	}

}
