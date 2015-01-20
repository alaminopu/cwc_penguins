<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OauthUsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		
			User::create([
				'username' => 'bshaffer',
 				'password' => 'brent123',
 				'first_name' => 'Brent',
			 	'last_name' => 'Shaffer'
			]);
		
	}

}