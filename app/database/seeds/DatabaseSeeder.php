<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('DepartmentsTableSeeder');
		$this->call('EmployeesTableSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('SamplesTableSeeder');
		$this->call('SuppliersTableSeeder');
		$this->call('ItemReceivesTableSeeder');
		$this->call('ItemReceivedPackagesTableSeeder');
		$this->call('ItemReceivedPackageDetailsTableSeeder');
		$this->call('CustomerGroupsTableSeeder');
		$this->call('ItemCategoriesTableSeeder');
		$this->call('CustomerGenerationsTableSeeder');
		$this->call('PaymentMethodsTableSeeder');
		$this->call('ShippingMethodsTableSeeder');
		$this->call('WarehousesTableSeeder');
	}

}
