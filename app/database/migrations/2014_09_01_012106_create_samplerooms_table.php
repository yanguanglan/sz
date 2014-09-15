<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSampleroomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('samplerooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('identity', 32);
			$table->integer('supplier_id');
			$table->integer('item_id');
			$table->integer('quantity');
			$table->string('position', 32);
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
		Schema::drop('samplerooms');
	}

}
