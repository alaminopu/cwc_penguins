<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OauthUsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			User::create([
				'username' => 'demouser',
 				'password' => 'demopass',
 				'first_name' => 'Demo',
			 	'last_name' => 'User',
			 	'email' => 'demo@mail.com',
			 	'mobile_no' => '01722454647',
			 	'profile_photo_link' => 'public/imgs/profile/kowalski.jpg',
			 	'address' => array(
			 		'house_no' => '3',
			 		'street_name' => 'test road',
			 		'road_no' => '4',
			 		'post_code' => '1207',
			 		'city' => 'Dhaka',
			 		'country' => 'Bangladesh'
			 		),
			 	'payment' => array('bkash','visa','debit')
			]);

	}

}
