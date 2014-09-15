<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemReceivedPackageDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_received_package_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('package_id');
			$table->string('identity', 32);
			$table->integer('supplier_id');
			$table->string('item', 32);
			$table->decimal('price', 5,2);
			$table->integer('quantity');
			$table->string('batch', 32);
			$table->string('readyposition', 32);
			$table->string('position', 32);
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
		Schema::drop('item_received_package_details');
	}

}
