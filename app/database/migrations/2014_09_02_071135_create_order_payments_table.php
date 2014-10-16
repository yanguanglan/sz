<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_payments', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_id')->index();
			$table->timestamp('paydate');
			$table->string('no');
			$table->decimal('amount', 15,2);
			$table->boolean('payment_method_id', 0);
			$table->string('memo');
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
		Schema::drop('order_payments');
	}

}
