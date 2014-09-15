<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemReceivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_receives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('no', 32);
			$table->integer('supplier_id');
			$table->date('received_date');
			$table->integer('item_count');
			$table->integer('package_count');
			$table->decimal('amount', 7,2);
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
		Schema::drop('item_receives');
	}

}
