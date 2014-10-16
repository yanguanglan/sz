<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomerGroupsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		/*foreach(range(1, 10) as $index)
		{*/
			CustomerGroup::create([
				'name'=>'普通客户',
				'description' => '普通客户',
				'rule'=>''
			]);

			CustomerGroup::create([
				'name'=>'一级客户',
				'description' => '一级客户',
				'rule'=>''
			]);

			CustomerGroup::create([
				'name'=>'二级客户',
				'description' => '二级客户',
				'rule'=>''
			]);

			CustomerGroup::create([
				'name'=>'三级客户',
				'description' => '三级客户',
				'rule'=>''
			]);
		/*}*/
	}

}