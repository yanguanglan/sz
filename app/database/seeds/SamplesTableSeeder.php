<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SamplesTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Sample::create([

			]);
		}*/

		Sample::create([
			'code'=>'158-52C-A',
			'stock'=>5
			]);

		Sample::create([
			'code'=>'158-52C-B',
			'stock'=>5
			]);

		Sample::create([
			'code'=>'158-52C-C',
			'stock'=>5
			]);

		Sample::create([
			'code'=>'158-52C-D',
			'stock'=>5
			]);

		Sample::create([
			'code'=>'158-52C-E',
			'stock'=>5
			]);
	}

}