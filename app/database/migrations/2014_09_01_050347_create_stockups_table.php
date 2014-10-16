<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('order_id')->index();
			$table->integer('stockup_count');
			$table->integer('item_count');
			$table->decimal('amount', 15, 2);
			$table->string('operator', 100);
			$table->string('auditors', 100);
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
		Schema::drop('stockups');
	}

}
