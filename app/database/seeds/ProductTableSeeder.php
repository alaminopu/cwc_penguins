<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		Product::truncate();

			Product::create([
				'seller_username' => 'shovon',
				'product_title' => 'htc one m8-2',
 				'product_brand' => 'htc',
 				'product_model' => 'one m8-2',
 				'category' => 'electronics',
 				'subcategory' => 'smartphone',
			 	'quantity' => 100,
			 	'price' => 25,
			 	'product_image_link' => 'public/imgs/products/electronics/smartphone/htc-one-m8-2.jpg',
			 	'product_description' => $faker->text,
			 	'discount' => 0,
			 	'review_text' => array($faker->text()),
			 	'rating' => 4,
			 	'sold_count' => 0
			]);


			Product::create([
				'seller_username' => 'opu',
				'product_title' => 'lumia-535',
 				'product_brand' => 'nokia',
 				'product_model' => '535',
 				'category' => 'electronics',
 				'subcategory' => 'smartphone',
			 	'quantity' => 100,
			 	'price' => 35000,
			 	'product_image_link' => 'public/imgs/products/electronics/smartphone/lumia-535_front_back.jpg',
			 	'product_description' => $faker->text,
			 	'discount' => 0,
			 	'review_text' => array($faker->text()),
			 	'rating' => 4,
			 	'sold_count' => 0
			]);

				  Product::create([
				  	'seller_username' => 'anis',
					'product_title' => 'Anarkoli black',
	 				'product_brand' =>'Aarong',
	 				'product_model' => '',
	 				'category' => 'dress',
	 				'subcategory' => 'women',
				 	'quantity' => 100,
				 	'price' => 1500,
				 	'product_image_link' => 'public/imgs/products/dresswomendress/anarkoli/Aarong_anarkoli_black.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);


				Product::create([
					'seller_username' => 'shovon',
					'product_title' => 'macbookair q410-13 keyboard lg',
	 				'product_brand' => 'apple',
	 				'product_model' => 'q410-13',
	 				'category' => 'electronics',
	 				'subcategory' => 'computer',
				 	'quantity' => 100,
				 	'price' => 120000,
				 	'product_image_link' => 'public/imgs/products/electronics/computer/apple-macbookair-q410-13-keyboard-lg.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);

				Product::create([
					'seller_username' => 'anis',
					'product_title' => 'asus laptop',
	 				'product_brand' => 'asus',
	 				'product_model' => 'm8-2',
	 				'category' => 'electronics',
	 				'subcategory' => 'computer',
				 	'quantity' => 90,
				 	'price' => 45000,
				 	'product_image_link' => 'public/imgs/products/electronics/computer/asus_laptop.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 4.5,
				 	'sold_count' => 0
				]);

				Product::create([
					'seller_username' => 'shovon',
					'product_title' => 'dell laptop',
	 				'product_brand' => 'dell',
	 				'product_model' => 'm8',
	 				'category' => 'electronics',
	 				'subcategory' => 'computer',
				 	'quantity' => 45,
				 	'price' => 50000,
				 	'product_image_link' => 'public/imgs/products/electronics/computer/dell.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);

				Product::create([
					'seller_username' => 'anis',
					'product_title' => 'creative headphone',
	 				'product_brand' => 'creative',
	 				'product_model' => '2g8',
	 				'category' => 'electronics',
	 				'subcategory' => 'headphone',
				 	'quantity' => 200,
				 	'price' => 800,
				 	'product_image_link' => 'public/imgs/products/electronics/headphone/creative-headphone.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);

				Product::create([
					'seller_username' => 'opu',
					'product_title' => 'asus google nexus',
	 				'product_brand' => 'asus',
	 				'product_model' => 'nexus',
	 				'category' => 'electronics',
	 				'subcategory' => 'smartphone',
				 	'quantity' => 1000,
				 	'price' => 40000,
				 	'product_image_link' => 'public/imgs/products/electronics/smartphone/asus-google-nexus.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);
					

			Product::create([
					'seller_username' => 'opu',
					'product_title' => 'walton bike prizm',
	 				'product_brand' => 'walton',
	 				'product_model' => '34fgs',
	 				'category' => 'vehicles',
	 				'subcategory' => 'bike',
				 	'quantity' => 8,
				 	'price' => 40000,
				 	'product_image_link' => 'public/imgs/products/vehicles/bike/walton_bike_prizom.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'review_text' => array($faker->text()),
				 	'rating' => 5,
				 	'sold_count' => 0
				]);

	}

}
