<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderReturnDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_return_details', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_return_id')->index();
			$table->bigInteger('stockup_id')->index();
			$table->bigInteger('stockup_detail_id')->index();
			$table->integer('quantity');
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
		Schema::drop('order_return_details');
	}

}
