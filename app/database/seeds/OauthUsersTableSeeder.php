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
 				'first_name' => 'Brent',
			 	'last_name' => 'Shaffer',
			 	'email' => 'brent@mail.com'
			]);

	}

}
