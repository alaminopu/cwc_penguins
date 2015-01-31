<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
			Orders::truncate();
			Orders::create([
				'seller_username' => 'opu',
				'buyer_username' =>'anis',
				'product_id' => '54cc249c438767d41000002e',
				'order_date' => '23/11/14',
 				'delivery_date' => '31/01/15',
				'delivery_status' => false

			]);
	}

}
