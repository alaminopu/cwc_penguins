<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		Category::truncate();

			Category::create([
				'category' => 'electronics',
				'subcategory' => array('computers','smartphone','headphone','tab')
			]);

			Category::create([
				'category' => 'dress',
				'subcategory' => array('mens','womens','kids')
			]);

			Category::create([
				'category' => 'vehicles',
				'subcategory' => array('bike','car')
			]);

			Category::create([
				'category' => 'sports',
				'subcategory' => array('cricket','football','jersey')
			]);

			Category::create([
				'category' => 'cosmetics',
				'subcategory' => array('body_spray','perfume')
			]);
	}

}
