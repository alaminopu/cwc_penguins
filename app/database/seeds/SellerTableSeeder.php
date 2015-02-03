<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SellerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
			Seller::truncate();
			Seller::create([
				'seller_username' => 'opu',
 				'achievement' => '',
			 	'seller_review_text' => array($faker->text()),
			 	'seller_rating' => 4.5
			]);
			Seller::create([
				'seller_username' => 'anis',
 				'achievement' => '',
			 	'seller_review_text' => array($faker->text()),
			 	'seller_rating' => 4.5
			]);
			Seller::create([
				'seller_username' => 'shovon',
 				'achievement' => '',
			 	'seller_review_text' => array($faker->text()),
			 	'seller_rating' => 4.5
			]);

	}

}
