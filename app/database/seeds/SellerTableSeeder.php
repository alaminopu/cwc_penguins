<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SellerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::where('username','=','opu')->get()->first();
			Seller::truncate();
			Seller::create([
				'username' => $users->username,
 				'achievement' => 'Elite',
			 	'review_text' => array($faker->text()),
			 	'rating' => 4.5,
			 	'followers' => ''
			]);

	}

}
