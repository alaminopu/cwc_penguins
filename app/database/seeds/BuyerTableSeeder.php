<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BuyerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','demouser')->get()->first();
		$product = Product::where('product_title','=','Asus Laptop')->get()->first();

			Buyer::create([
				'username' => $users->username,
				'buying_items' => array(
					'product_id' => $product->_id,
					),
				'wishlist' => array(
					'product_id' => ''
					),	
 				'following' => ''
			 	
			]);
	}

}
