<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DepartmentsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{			
			Department::create([
				'name'=>'采购',
				'short_name'=>'CG',
				'right'=>'',
				'parent_id'=>0,
				'sort'=>0
			]);

			Department::create([
				'name'=>'销售',
				'short_name'=>'XS',
				'right'=>'',
				'parent_id'=>0,
				'sort'=>0
			]);

			Department::create([
				'name'=>'仓库',
				'short_name'=>'CK',
				'right'=>'',
				'parent_id'=>0,
				'sort'=>0
			]);
			
			Department::create([
				'name'=>'财务',
				'short_name'=>'CW',
				'right'=>'',
				'parent_id'=>0,
				'sort'=>0
			]);
		//}
	}

}