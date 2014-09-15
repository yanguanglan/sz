<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('short_name', 10);
			$table->string('code', 32);
			$table->integer('image');
			$table->integer('category_id');
			$table->integer('sample_id');
			$table->decimal('price_market', 5,2);
			$table->integer('stock');
			$table->text('attribute');
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
		Schema::drop('items');
	}

}
