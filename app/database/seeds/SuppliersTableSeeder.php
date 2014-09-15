<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SuppliersTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Supplier::create([

			]);
		}*/

		Supplier::create([
			'name'=>'杨一',
			'short_name'=>'YY',
			'type'=>0,
			'mobile'=>'13588100379',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥119当铺',
			'address'=>'绍兴柯桥119当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);

		Supplier::create([
			'name'=>'杨二',
			'short_name'=>'YE',
			'type'=>0,
			'mobile'=>'13588100377',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥117当铺',
			'address'=>'绍兴柯桥117当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);

		Supplier::create([
			'name'=>'杨三',
			'short_name'=>'YS',
			'type'=>0,
			'mobile'=>'13588100378',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥118当铺',
			'address'=>'绍兴柯桥118当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);

		Supplier::create([
			'name'=>'杨学弟',
			'short_name'=>'YXD',
			'type'=>0,
			'mobile'=>'13588100375',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥119当铺',
			'address'=>'绍兴柯桥119当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);

		Supplier::create([
			'name'=>'冬雪敏',
			'short_name'=>'DXM',
			'type'=>0,
			'mobile'=>'13588100374',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥117当铺',
			'address'=>'绍兴柯桥117当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);

		Supplier::create([
			'name'=>'周小龙',
			'short_name'=>'ZXL',
			'type'=>0,
			'mobile'=>'13588100373',
			'telephone'=>'',
			'mail'=>'',
			'url'=>'',
			'qq'=>'',
			'wechat'=>'',
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'street'=>'绍兴柯桥118当铺',
			'address'=>'绍兴柯桥118当铺',
			'postcode'=>'310022',
			'acreage'=>'',
			'company'=>'',
			'amount'=>'',
			'output'=>'',
			'bank'=>'',
			'bank_address'=>'',
			'account_no'=>'',
			'account_name'=>'',
			'audit_status'=>2
			]);
	}

}