<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomerGenerationsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		foreach(range(1001, 9998) as $index)
		{	
			if($index == 1111 ||
			   $index == 2222 ||
			   $index == 3333 ||
			   $index == 4444 ||
			   $index == 5555 ||
			   $index == 6666 ||
			   $index == 7777 ||
			   $index == 8888
			){
				continue;
			}

			CustomerGeneration::create([
				'customer_no' => $index,
				'used' => 0,
			]);
		}
	}

}