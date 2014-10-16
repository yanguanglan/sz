<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemIdentitysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_identitys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('supplier_id')->index();
			$table->integer('item_id')->index();
			$table->integer('quantity');
			$table->text('content');
			$table->boolean('actived', 0);
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
		Schema::drop('item_identitys');
	}

}
