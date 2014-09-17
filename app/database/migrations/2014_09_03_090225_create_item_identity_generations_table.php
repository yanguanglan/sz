<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemIdentityGenerationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_identity_generations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item', 32);
			$table->string('identity', 32);
			$table->boolean('used', 0);
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
		Schema::drop('item_identity_generations');
	}

}
