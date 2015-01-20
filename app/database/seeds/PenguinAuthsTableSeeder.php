<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PenguinAuthsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		
			PenguinAuth::create([
				'client_id' => 'testclient',
				'client_secret' => 'testpass',
				'redirect_uri' => $faker->url(),
			]);
		
	}

}