<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemReceivesTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			ItemReceive::create([

			]);
		}*/

		ItemReceive::create([
			'no'=>'20140904112356001',
			'supplier_id'=>1,
			'received_date'=>'2014-09-04',
			'item_count'=>'5000',
			'package_count'=>2,
			'amount'=>15000,
			'status'=>0
			]);

		ItemReceive::create([
			'no'=>'20140904112356001',
			'supplier_id'=>1,
			'received_date'=>'2014-09-05',
			'item_count'=>'8000',
			'package_count'=>3,
			'amount'=>22000,
			'status'=>0
			]);

			ItemReceive::create([
			'no'=>'20140904112356002',
			'supplier_id'=>2,
			'received_date'=>'2014-09-04',
			'item_count'=>'5000',
			'package_count'=>2,
			'amount'=>15000,
			'status'=>0
			]);

		ItemReceive::create([
			'no'=>'20140904112356002',
			'supplier_id'=>2,
			'received_date'=>'2014-09-05',
			'item_count'=>'8000',
			'package_count'=>3,
			'amount'=>22000,
			'status'=>0
			]);

			ItemReceive::create([
			'no'=>'20140904112356003',
			'supplier_id'=>3,
			'received_date'=>'2014-09-04',
			'item_count'=>'5000',
			'package_count'=>2,
			'amount'=>15000,
			'status'=>0
			]);

		ItemReceive::create([
			'no'=>'20140904112356003',
			'supplier_id'=>3,
			'received_date'=>'2014-09-05',
			'item_count'=>'8000',
			'package_count'=>3,
			'amount'=>22000,
			'status'=>0
			]);

	}

}