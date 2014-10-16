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
			$table->string('code', 32)->unique();
			$table->string('image');
			$table->bigInteger('image_hash')->nullable();
			$table->integer('category_id')->default(0)->index();
			$table->integer('sample_id')->default(0)->index();
			$table->decimal('price_market', 5,2)->default(0.00);
			$table->integer('stock')->default(0);
			$table->integer('readystock')->default(0);
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
