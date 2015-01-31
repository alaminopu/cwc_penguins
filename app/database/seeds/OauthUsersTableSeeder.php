<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OauthUsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		User::truncate();

			User::create([
				'username' => 'anis',
 				'password' => '123456',
 				'first_name' => 'Anisuzzaman',
			 	'last_name' => 'Khan',
			 	'email' => 'anis@mail.com',
			 	'mobile_no' => '01722454649',
			 	'profile_photo_link' => 'public/imgs/profile/kowalski.jpg',
			 	'address' => array(
			 		'house_no' => '39',
			 		'street_name' => 'shenpara road',
			 		'road_no' => '39/b',
			 		'post_code' => '1210',
			 		'city' => 'Dhaka',
			 		'country' => 'Bangladesh'
			 		),
			 	'payment' => array('bkash','visa','debit')
			]);

			User::create([
				'username' => 'opu',
 				'password' => '123456',
 				'first_name' => 'Md.',
			 	'last_name' => 'Al-Amin',
			 	'email' => 'opu@mail.com',
			 	'mobile_no' => '01722454647',
			 	'profile_photo_link' => 'public/imgs/profile/kowalski.jpg',
			 	'address' => array(
			 		'house_no' => '97',
			 		'street_name' => 'chairman goli',
			 		'road_no' => '17',
			 		'post_code' => '1207',
			 		'city' => 'Dhaka',
			 		'country' => 'Bangladesh'
			 		),
			 	'payment' => array('bkash','visa','debit')
			]);

			User::create([
				'username' => 'shovon',
 				'password' => '123456',
 				'first_name' => 'Saeef',
			 	'last_name' => 'Minhaz',
			 	'email' => 'saeef@mail.com',
			 	'mobile_no' => '01722454687',
			 	'profile_photo_link' => 'public/imgs/profile/kowalski.jpg',
			 	'address' => array(
			 		'house_no' => '2/7/c',
			 		'street_name' => 'panir tank road',
			 		'road_no' => '21',
			 		'post_code' => '1216',
			 		'city' => 'Dhaka',
			 		'country' => 'Bangladesh'
			 		),
			 	'payment' => array('bkash','visa','debit')
			]);
	}

}
