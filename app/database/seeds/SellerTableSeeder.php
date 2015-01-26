<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SellerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','demouser')->get()->first();
		$product = Product::where('product_title','=','HP Laptop')->get()->first();

			Seller::create([
				'user_id' => $users->_id,
 				'product_id' => $product->_id,
 				'achievement' => 'Elite',
			 	'seller_review' => array(
			 		'review_text' => $faker->text(),
			 		'rating' => '4.5'
			 		),
			 	'followers' => ''
			]);

	}

}
