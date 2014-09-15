<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('customer', 100);
			$table->integer('quantity');
			$table->string('shipping_name', 100);
			$table->string('shipping_address');
			$table->string('shipping_contact');
			$table->string('customer_address');
			$table->string('customer_contact');
			$table->string('entry_fee');
			$table->string('commission');
			$table->boolean('delivered', 0);
			$table->text ('memo');
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
		Schema::drop('delivery_details');
	}

}
