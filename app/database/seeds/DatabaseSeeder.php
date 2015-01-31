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

		 $this->call('PenguinAuthsTableSeeder');
		 $this->call('OauthUsersTableSeeder');
		 $this->call('ProductTableSeeder');
		 $this->call('CategoryTableSeeder');
		 $this->call('SellerTableSeeder');
		 $this->call('BuyerTableSeeder');
		 $this->call('OrdersTableSeeder');
	}

}
