<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ShippingMethodsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			ShippingMethod::create([
				'name'=>'货到付款',
				'content'=>'货到付款',
			]);
		//}
	}

}