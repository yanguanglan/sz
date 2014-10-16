<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemCodeReferenceValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_code_reference_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->index();
			$table->string('code', 10);
			$table->string('value', 100);
			$table->integer('sort');
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
		Schema::drop('item_code_reference_values');
	}

}
