<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BuyerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','opu')->get()->first();
		$product = Product::where('seller_username','=','anis')->get()->first();

			Buyer::truncate();
			Buyer::create([
				'buyer_username' => $users->username,
				'purchased_items' => array($product->_id),
				'wishlist' => array()
			]);
	}

}
