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
			$table->bigInteger('order_id')->index();
			$table->timestamp('shipping_date');
			$table->string('no', 32);
			$table->string('carrier', 100);
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
