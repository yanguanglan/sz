<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoryWarehousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('history_warehouses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('identity', 32);
			$table->string('item', 32);
			$table->string('batch', 32);
			$table->integer('quantity');
			$table->string('position', 32);
			$table->string('operator', 100);
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
		Schema::drop('history_warehouses');
	}

}
