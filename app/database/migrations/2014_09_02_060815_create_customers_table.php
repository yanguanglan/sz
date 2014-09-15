<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 64);
			$table->string('password', 64);
			$table->boolean('actived', 0);
			$table->string('customer_no', 32);
			$table->string('name', 100);
			$table->string('short_name', 10);
			$table->boolean('type', 0);
			$table->integer('group_id');
			$table->string('mobile', 11);
			$table->string('telephone', 15);
			$table->string('mail', 100);
			$table->string('url', 100);
			$table->string('qq', 15);
			$table->string('wechat', 100);
			$table->boolean('sex', 0);
			$table->date('birthday');
			$table->integer('province');
			$table->integer('city');
			$table->integer('district');
			$table->string('postcode', 6);
			$table->string('street');
			$table->string('address');
			$table->text('business');
			$table->integer('point');
			$table->integer('credit');
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
		Schema::drop('customers');
	}

}
