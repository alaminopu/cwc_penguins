<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BuyerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','opu')->get()->first();
		$product = Product::where('product_title','=','asus laptop')->get()->first();

			Buyer::truncate();
			Buyer::create([
				'username' => $users->username,
				'buying_items' => array($product->_id),
				'wishlist' => array(),
 				'following' => ''

			]);
	}

}
