<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderReturnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_returns', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_id');
			$table->integer('customer_id');
			$table->string('question');
			$table->text('description');
			$table->integer('quantity');
			$table->decimal('amount', 7,2);
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
		Schema::drop('order_returns');
	}

}
