<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemReceivedPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_received_packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('received_id')->index();
			$table->string('package_no', 32);
			$table->date('package_received_date');
			$table->date('package_checked_date');
			$table->integer('item_count');
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
		Schema::drop('item_received_packages');
	}

}
