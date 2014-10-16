<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_details', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('order_id')->index();
			$table->bigInteger('item_id')->index();
			$table->string('craft_description');
			$table->integer('quantity');
			$table->decimal('confirm_price', 7,2);
			$table->integer('confirm_quantity');
			$table->integer('delivery_quantity');
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
		Schema::drop('order_details');
	}

}
