<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockpackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockpackages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('order_id')->index();
			$table->string('package_no', 32);
			$table->integer('item_count');
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
		Schema::drop('stockpackages');
	}

}
