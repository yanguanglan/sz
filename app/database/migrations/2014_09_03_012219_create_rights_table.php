<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rights', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('action');
			$table->integer('parent_id');
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
		Schema::drop('rights');
	}

}
