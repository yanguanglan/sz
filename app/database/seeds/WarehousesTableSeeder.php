<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WarehousesTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			Warehouse::create([
				'item'=>'158-52A',
				'quantity'=>800,
				'position'=>205
			]);

			Warehouse::create([
				'item'=>'158-52B',
				'quantity'=>900,
				'position'=>213
			]);

			Warehouse::create([
				'item'=>'211-19A',
				'quantity'=>900,
				'position'=>125
			]);

			Warehouse::create([
				'item'=>'211-19B',
				'quantity'=>900,
				'position'=>126
			]);

		//}
	}

}