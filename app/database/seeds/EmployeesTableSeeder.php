<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Employee::create([

			]);
		}*/

		//采购
			Employee::create([
				'username'=>'CG001',
				'password'=>Hash::make('password'),
				'no'=>'CG001',
				'department_id'=>1,
				'name'=>'姚学勤',
				'short_name'=>'YXQ',
				'mobile'=>'13588100301',
				'right'=>'',
				'actived'=>1
			]);
		//销售
			Employee::create([
				'username'=>'XS001',
				'password'=>Hash::make('password'),
				'no'=>'XS001',
				'department_id'=>2,
				'name'=>'姚麦勤',
				'short_name'=>'YMQ',
				'mobile'=>'13588100302',
				'right'=>'',
				'actived'=>1
			]);
		//仓库
			Employee::create([
				'username'=>'CK001',
				'password'=>Hash::make('password'),
				'no'=>'CK001',
				'department_id'=>3,
				'name'=>'姚力勤',
				'short_name'=>'YLQ',
				'mobile'=>'13588100303',
				'right'=>'',
				'actived'=>1
			]);
		//财务
			Employee::create([
				'username'=>'CW001',
				'password'=>Hash::make('password'),
				'no'=>'CW001',
				'department_id'=>4,
				'name'=>'姚书勤',
				'short_name'=>'YSQ',
				'mobile'=>'13588100304',
				'right'=>'',
				'actived'=>1
			]);
	}

}