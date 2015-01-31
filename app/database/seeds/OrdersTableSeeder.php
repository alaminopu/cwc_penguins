<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','opu')->get()->first();
			Orders::truncate();
			Orders::create([
				'seller_id' => $users->_id,
				'buyer_id' =>'',
				'product_id' => '',
				'order_date' => '',
 				'delivery_date' => '',
				'delivery_status' => false

			]);
	}

}
