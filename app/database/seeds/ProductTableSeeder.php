<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			Product::create([
				'product_title' => 'HP Laptop',
 				'product_brand' => 'HP',
 				'product_category' => array(
 					'Electronics' => array('Computer','Mobile','Smartphone')
 					),
			 	'quantity' => '100',
			 	'price' => '25',
			 	'product_image_link' => $faker->url(),
			 	'product_description' => $faker->text,
			 	'discount' => '0',
			 	'product_review' => array(
			 		'review_text' => $faker->text(),
			 		'rating' => '4.5'
			 		)
			]);


			Product::create([
				'product_title' => 'Asus Laptop',
 				'product_brand' => 'Asus',
 				'product_category' => array(
 					'Electronics' => array('Computer','Mobile','Smartphone')
 					),
			 	'quantity' => '100',
			 	'price' => '25',
			 	'product_image_link' => $faker->url(),
			 	'product_description' => $faker->text,
			 	'discount' => '0',
			 	'product_review' => array(
			 		'review_text' => $faker->text(),
			 		'rating' => '4.5'
			 		)
			]);

	}

}
