<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderHistorysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_historys', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('order_id')->index();
			$table->string('action');
			$table->string('content');
			$table->string('operator');
			$table->text('memo');
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
		Schema::drop('order_historys');
	}

}
