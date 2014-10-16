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
			$table->integer('stockup_id')->index();
			$table->string('identity', 32);
			$table->integer('supplier_id');
			$table->integer('item_id')->index();
			$table->integer('quantity');
			$table->integer('position')->index();
			$table->boolean('status', 0);
			$table->boolean('packaged', 0);
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
