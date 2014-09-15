<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemAttributeGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_attribute_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->boolean('type', 0);
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
		Schema::drop('item_attribute_groups');
	}

}
