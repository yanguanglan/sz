<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerReceivedAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_received_address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id');
			$table->string('name', 100);
			$table->string('mobile', 11);
			$table->integer('province');
			$table->integer('city');
			$table->integer('district');
			$table->string('street');
			$table->string('address');
			$table->string('postcode', 6);
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
		Schema::drop('customer_received_address');
	}

}
