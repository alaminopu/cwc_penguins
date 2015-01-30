<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PenguinAuthsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			PenguinAuth::truncate();
			PenguinAuth::create([
				'client_id' => 'testclient',
				'client_secret' => 'testpass',
				'redirect_uri' => 'http://local.dev/',
			]);

	}

}
