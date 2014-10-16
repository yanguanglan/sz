<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PaymentMethodsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			PaymentMethod::create([
				'name'=>'工商银行',
				'content'=>'银行:中国工商银行 卡号:6335758301540489 开户名:蓝燕光',
			]);
		//}
	}

}