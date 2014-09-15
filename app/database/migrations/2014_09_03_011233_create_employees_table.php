<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 64);
			$table->string('password', 64);
			$table->string('no', 32);
			$table->integer('department_id');
			$table->string('name', 100);
			$table->string('short_name', 10);
			$table->string('mobile', 11);
			$table->string('right');
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
		Schema::drop('employees');
	}

}
