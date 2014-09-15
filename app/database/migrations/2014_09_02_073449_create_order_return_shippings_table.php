<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderReturnShippingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_return_shippings', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_return_id');
			$table->string('no', 32);
			$table->string('carrier', 100);
			$table->string('contact');
			$table->integer('quantity');
			$table->text('memo');
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
		Schema::drop('order_return_shippings');
	}

}
