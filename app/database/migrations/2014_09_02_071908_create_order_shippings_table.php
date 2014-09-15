<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderShippingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_shippings', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_id');
			$table->string('no', 32);
			$table->string('destination');
			$table->string('payment');
			$table->integer('quantity');
			$table->string('carrier', 100);
			$table->string('delivery');
			$table->string('reveived');
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
		Schema::drop('order_shippings');
	}

}
