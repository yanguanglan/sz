<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemReceivedPackageDetailsTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			ItemReceivedPackageDetail::create([

			]);
		}*/
		//1
		//package1
	/*	ItemReceivedPackageDetail::create([
			'package_id'=>1,
			'identity'=>'158-52A,A01',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 
			'readyposition'=>'', 'batch'=>'',
			
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>1,
			'identity'=>'158-52A,A02',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>1,
			'identity'=>'158-52B,A01',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>1,
			'identity'=>'158-52B,A02',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>1,
			'identity'=>'158-52B,A03',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P2
		ItemReceivedPackageDetail::create([
			'package_id'=>2,
			'identity'=>'158-52A,A11',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>2,
			'identity'=>'158-52A,A12',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>2,
			'identity'=>'158-52B,A11',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>2,
			'identity'=>'158-52B,A12',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>2,
			'identity'=>'158-52B,A13',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P3
		ItemReceivedPackageDetail::create([
			'package_id'=>3,
			'identity'=>'158-52A,A21',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>3,
			'identity'=>'158-52A,A22',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>3,
			'identity'=>'158-52B,A21',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>3,
			'identity'=>'158-52B,A22',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>3,
			'identity'=>'158-52B,A23',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P4
		ItemReceivedPackageDetail::create([
			'package_id'=>4,
			'identity'=>'158-52A,A31',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>4,
			'identity'=>'158-52A,A32',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>4,
			'identity'=>'158-52B,A31',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>4,
			'identity'=>'158-52B,A32',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>4,
			'identity'=>'158-52B,A33',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P5
		ItemReceivedPackageDetail::create([
			'package_id'=>5,
			'identity'=>'158-52A,A41',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>5,
			'identity'=>'158-52A,A42',
			'supplier_id'=>1,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>5,
			'identity'=>'158-52B,A41',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>5,
			'identity'=>'158-52B,A42',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>5,
			'identity'=>'158-52B,A43',
			'supplier_id'=>1,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//2
		//package1
		ItemReceivedPackageDetail::create([
			'package_id'=>6,
			'identity'=>'158-52A,A01',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>6,
			'identity'=>'158-52A,A02',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>6,
			'identity'=>'158-52B,A01',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>6,
			'identity'=>'158-52B,A02',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>6,
			'identity'=>'158-52B,A03',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P2
		ItemReceivedPackageDetail::create([
			'package_id'=>7,
			'identity'=>'158-52A,A11',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>7,
			'identity'=>'158-52A,A12',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>7,
			'identity'=>'158-52B,A11',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>7,
			'identity'=>'158-52B,A12',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>7,
			'identity'=>'158-52B,A13',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P3
		ItemReceivedPackageDetail::create([
			'package_id'=>8,
			'identity'=>'158-52A,A21',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>8,
			'identity'=>'158-52A,A22',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>8,
			'identity'=>'158-52B,A21',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>8,
			'identity'=>'158-52B,A22',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>8,
			'identity'=>'158-52B,A23',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P4
		ItemReceivedPackageDetail::create([
			'package_id'=>9,
			'identity'=>'158-52A,A31',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>9,
			'identity'=>'158-52A,A32',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>9,
			'identity'=>'158-52B,A31',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>9,
			'identity'=>'158-52B,A32',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>9,
			'identity'=>'158-52B,A33',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P5
		ItemReceivedPackageDetail::create([
			'package_id'=>10,
			'identity'=>'158-52A,A41',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>10,
			'identity'=>'158-52A,A42',
			'supplier_id'=>2,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>10,
			'identity'=>'158-52B,A41',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>10,
			'identity'=>'158-52B,A42',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>10,
			'identity'=>'158-52B,A43',
			'supplier_id'=>2,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		//3
		//package1
		ItemReceivedPackageDetail::create([
			'package_id'=>11,
			'identity'=>'158-52A,A01',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>11,
			'identity'=>'158-52A,A02',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>11,
			'identity'=>'158-52B,A01',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>11,
			'identity'=>'158-52B,A02',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>11,
			'identity'=>'158-52B,A03',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P2
		ItemReceivedPackageDetail::create([
			'package_id'=>12,
			'identity'=>'158-52A,A11',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>12,
			'identity'=>'158-52A,A12',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>12,
			'identity'=>'158-52B,A11',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>12,
			'identity'=>'158-52B,A12',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>12,
			'identity'=>'158-52B,A03',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P3
		ItemReceivedPackageDetail::create([
			'package_id'=>13,
			'identity'=>'158-52A,A01',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>13,
			'identity'=>'158-52A,A02',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>13,
			'identity'=>'158-52B,A01',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>13,
			'identity'=>'158-52B,A02',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>200,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>13,
			'identity'=>'158-52B,A03',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P4
		ItemReceivedPackageDetail::create([
			'package_id'=>14,
			'identity'=>'158-52A,A01',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>14,
			'identity'=>'158-52A,A02',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>14,
			'identity'=>'158-52B,A01',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>14,
			'identity'=>'158-52B,A02',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>14,
			'identity'=>'158-52B,A03',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		//P5
		ItemReceivedPackageDetail::create([
			'package_id'=>15,
			'identity'=>'158-52A,A01',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>500,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>15,
			'identity'=>'158-52A,A02',
			'supplier_id'=>3,
			'item'=>'158-52A',
			'price'=>10,
			'quantity'=>700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);
		ItemReceivedPackageDetail::create([
			'package_id'=>15,
			'identity'=>'158-52B,A01',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>300,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>15,
			'identity'=>'158-52B,A02',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1700,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);

		ItemReceivedPackageDetail::create([
			'package_id'=>15,
			'identity'=>'158-52B,A03',
			'supplier_id'=>3,
			'item'=>'158-52B',
			'price'=>10,
			'quantity'=>1800,
			'position'=>'', 'readyposition'=>'', 'batch'=>'',
			'status'=>0
			]);*/
	}

}