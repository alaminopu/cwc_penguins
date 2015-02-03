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
				'product_id' => '54d110dc6854ca9f308b459a',
				'product_title' => 'neymar jersey',
				'product_quantity' => 5,
				'total_price' => 1020,
				'order_date' => '03/02/15',
 				'delivery_date' => '',
				'delivery_status' => false

			]);
	}

}
