<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemCategoriesTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{*/
			ItemCategory::create([
				'name'=>'男装',
				'description'=>'男装系列',
				'parent_id' => 0,
				'sort'=>0
			]);

			ItemCategory::create([
				'name'=>'女装',
				'description'=>'女装系列',
				'parent_id' => 0,
				'sort'=>0
			]);

			ItemCategory::create([
				'name'=>'童装',
				'description'=>'童装系列',
				'parent_id' => 0,
				'sort'=>0
			]);

			ItemCategory::create([
				'name'=>'箱包',
				'description'=>'箱包系列',
				'parent_id' => 0,
				'sort'=>0
			]);
		/*}*/
	}

}