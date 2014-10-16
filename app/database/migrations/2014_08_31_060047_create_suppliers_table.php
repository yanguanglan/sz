<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->index();
			$table->string('short_name', 10)->nullable();
			$table->boolean('type', 0);
			$table->string('mobile', 11)->unique();
			$table->string('telephone', 15);
			$table->string('mail', 100);
			$table->string('url', 100);
			$table->string('qq', 15);
			$table->string('wechat', 100);
			$table->integer('province')->default(0);
			$table->integer('city')->default(0);
			$table->integer('district')->default(0);
			$table->string('street');
			$table->string('address');
			$table->string('postcode', 6);
			$table->string('acreage', 100);
			$table->string('company');
			$table->string('amount', 100);
			$table->string('output', 100);
			$table->string('bank', 100);
			$table->string('bank_address');
			$table->string('account_no', 100);
			$table->string('account_name', 100);
			$table->boolean('audit_status', 0);
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
		Schema::drop('suppliers');
	}

}
