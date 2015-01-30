<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			Product::create([
				'product_title' => 'htc one m8-2',
 				'product_brand' => 'htc',
 				'product_model' => 'one m8-2',
 				'product_category' => array(
 					'category' => 'electronics',
 					'subcategory' => array('smartphone')
 					),
			 	'quantity' => '100',
			 	'price' => '25',
			 	'product_image_link' => 'public/imgs/products/electronics/smartphone/htc-one-m8-2.jpg',
			 	'product_description' => $faker->text,
			 	'discount' => '0',
			 	'product_review' => array(
			 		'review_text' => $faker->text(),
			 		'rating' => '4.5'
			 		)
			]);


			Product::create([
				'product_title' => 'lumia-535',
 				'product_brand' => 'nokia',
 				'product_model' => '535',
 				'product_category' => array(
 					'category' => 'electronics',
 					'subcategory' => array('smartphone')
 					),
			 	'quantity' => '100',
			 	'price' => '35000',
			 	'product_image_link' => 'public/imgs/products/electronics/smartphone/lumia-535_front_back.jpg',
			 	'product_description' => $faker->text,
			 	'discount' => '0',
			 	'product_review' => array(
			 		'review_text' => $faker->text(),
			 		'rating' => '4.5'
			 		)
			]);

				  Product::create([
					'product_title' => 'Anarkoli black',
	 				'product_brand' =>'Aarong',
	 				'product_model' => '',
	 				'product_category' => array(
	 					'category' => 'dress',
	 					'subcategory' => array('women_dress')
	 					),
				 	'quantity' => '100',
				 	'price' => '1500',
				 	'product_image_link' => 'public/imgs/products/dresswomendress/anarkoli/Aarong_anarkoli_black.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '4.5'
				 		)
				]);


				Product::create([
					'product_title' => 'macbookair q410-13 keyboard lg',
	 				'product_brand' => 'apple',
	 				'product_model' => 'q410-13',
	 				'product_category' => array(
	 					'category' => 'electronics',
	 					'subcategory' => array('computer')
	 					),
				 	'quantity' => '100',
				 	'price' => '120000',
				 	'product_image_link' => 'public/imgs/products/electronics/computer/apple-macbookair-q410-13-keyboard-lg.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '5'
				 		)
				]);

				Product::create([
					'product_title' => 'asus laptop',
	 				'product_brand' => 'asus',
	 				'product_model' => 'm8-2',
	 				'product_category' => array(
	 					'category' => 'electronics',
	 					'subcategory' => array('computer')
	 					),
				 	'quantity' => '90',
				 	'price' => '45000',
				 	'product_image_link' => 'public/imgs/products/electronics/computer/asus_laptop.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '4.5'
				 		)
				]);

				Product::create([
					'product_title' => 'dell laptop',
	 				'product_brand' => 'dell',
	 				'product_model' => 'm8',
	 				'product_category' => array(
	 					'category' => 'electronics',
	 					'subcategory' => array('computer')
	 					),
				 	'quantity' => '45',
				 	'price' => '50000',
				 	'product_image_link' => 'public/imgs/products/electronics/computer/dell.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '5.0'
				 		)
				]);

				Product::create([
					'product_title' => 'creative headphone',
	 				'product_brand' => 'creative',
	 				'product_model' => '2g8',
	 				'product_category' => array(
	 					'category' => 'electronics',
	 					'subcategory' => array('headphone')
	 					),
				 	'quantity' => '200',
				 	'price' => '800',
				 	'product_image_link' => 'public/imgs/products/electronics/headphone/creative-headphone.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '5'
				 		)
				]);

				Product::create([
					'product_title' => 'asus google nexus',
	 				'product_brand' => 'asus',
	 				'product_model' => 'nexus',
	 				'product_category' => array(
	 					'category' => 'electronics',
	 					'subcategory' => array('smartphone')
	 					),
				 	'quantity' => '1000',
				 	'price' => '40000',
				 	'product_image_link' => 'public/imgs/products/electronics/smartphone/asus-google-nexus.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '5'
				 		)
				]);
					

			Product::create([
					'product_title' => 'walton bike prizm',
	 				'product_brand' => 'walton',
	 				'product_model' => '34fgs',
	 				'product_category' => array(
	 					'category' => 'vehicles',
	 					'subcategory' => array('bike')
	 					),
				 	'quantity' => '8',
				 	'price' => '40000',
				 	'product_image_link' => 'public/imgs/products/vehicles/bike/walton_bike_prizom.jpg',
				 	'product_description' => $faker->text,
				 	'discount' => '0',
				 	'product_review' => array(
				 		'review_text' => $faker->text(),
				 		'rating' => '5'
				 		)
				]);

	}

}
