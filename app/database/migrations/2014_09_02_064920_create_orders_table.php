<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('no', 32)->unique();
			$table->integer('customer_id')->index();
			$table->integer('customer_address_id')->index();
			$table->integer('payment_method_id')->index();
			$table->integer('shipping_method_id')->index();
			$table->string('order_status', 32);
			$table->decimal('item_fee', 15,2);
			$table->integer('shipping_fee');
			$table->decimal('amount_fee', 15,2);
			$table->integer('point_fee');
			$table->integer('credit_fee');
			$table->decimal('pay_fee', 15,2);
			$table->integer('caution_money');
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
		Schema::drop('orders');
	}

}
