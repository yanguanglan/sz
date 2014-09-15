<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockupDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockup_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('stockup_id');
			$table->string('identity', 32);
			$table->integer('supplier_id');
			$table->integer('item_id');
			$table->integer('quantity');
			$table->string('position', 32);
			$table->boolean('crop', 0);
			$table->string('reason');
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
		Schema::drop('stockup_details');
	}

}
