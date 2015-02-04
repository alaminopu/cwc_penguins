<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		Product::truncate();

			Product::create([
					'product_title' => 'aero road bike',
					'seller_username' => 'anis',
	 				'product_brand' => 'aero',
	 				'product_model'=> 'aero_w91',
	 				'category' => 'vehicles',
	 				'subcategory'=>'bike',
				 	'quantity' => 5,
				 	'price' => 15000,
				 	'product_image_link' => array('public/imgs/products/vehicles/bike/aero_road_bike.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'amigo bike',
					'seller_username' => 'anis',
	 				'product_brand' => 'amigo',
	 				'product_model'=> 'amigo_66t',
	 				'category' => 'vehicles',
	 				'subcategory'=>'bike',
				 	'quantity' => 9,
				 	'price' => 18500,
				 	'product_image_link' => array('public/imgs/products/vehicles/bike/amigo.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'gt_force mountain bike',
					'seller_username' => 'shovon',
	 				'product_brand' => 'amigo',
	 				'product_model'=> 'amigo_66T',
	 				'category' => 'vehicles',
	 				'subcategory'=>'bike',
				 	'quantity' => 9,
				 	'price' => 18500,
				 	'product_image_link' => array('public/imgs/products/vehicles/bike/GT_force.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'handlebar grips',
					'seller_username' => 'anis',
	 				'product_brand' => 'nike',
	 				'product_model'=> 'grips225',
	 				'category' => 'vehicles',
	 				'subcategory'=>'bike',
				 	'quantity' => 14,
				 	'price' => 540,
				 	'product_image_link' => array('public/imgs/products/vehicles/bike/handlebar-bar-grips.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'mountain bike',
					'seller_username' => 'opu',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'bike_mt',
	 				'category' => 'vehicles',
	 				'subcategory'=>'bike',
				 	'quantity' => 11,
				 	'price' => 54000,
				 	'product_image_link' => array('public/imgs/products/vehicles/bike/mountain_bike.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'bmw 1 series',
					'seller_username' => 'opu',
	 				'product_brand' => 'bmw',
	 				'product_model'=> 'bmw 1',
	 				'category' => 'vehicles',
	 				'subcategory'=>'car',
				 	'quantity' => 11,
				 	'price' => 5400000,
				 	'product_image_link' => array('public/imgs/products/vehicles/car/bmw_1_series.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'bmw 7 series',
					'seller_username' => 'shovon',
	 				'product_brand' => 'bmw',
	 				'product_model'=> 'bmw 7',
	 				'category' => 'vehicles',
	 				'subcategory'=>'car',
				 	'quantity' => 4,
				 	'price' => 6800000,
				 	'product_image_link' => array('public/imgs/products/vehicles/car/BMW_7_Series.png'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'bmw x6',
					'seller_username' => 'shovon',
	 				'product_brand' => 'bmw',
	 				'product_model'=> 'bmw x6',
	 				'category' => 'vehicles',
	 				'subcategory'=>'car',
				 	'quantity' => 5,
				 	'price' => 7800000,
				 	'product_image_link' => array('public/imgs/products/vehicles/car/BMW_X6.png'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 5
				]);

			Product::create([
					'product_title' => 'mitsubishi pajero platinum',
					'seller_username' => 'opu',
	 				'product_brand' => 'mitsubishi',
	 				'product_model'=> 'mitsubishi pajero',
	 				'category' => 'vehicles',
	 				'subcategory'=>'car',
				 	'quantity' => 9,
				 	'price' => 1800000,
				 	'product_image_link' => array('public/imgs/products/vehicles/car/Mitsubishi_Pajero_Platinum.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 6
				]);

			Product::create([
					'product_title' => 'honda_scooter',
					'seller_username' => 'anis',
	 				'product_brand' => 'Honda',
	 				'product_model'=> 'honda scooter',
	 				'category' => 'vehicles',
	 				'subcategory'=>'motorbike',
				 	'quantity' => 9,
				 	'price' => 800000,
				 	'product_image_link' => array('public/imgs/products/vehicles/motorbike/honda_scooter.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 9
				]);

			Product::create([
					'product_title' => 'suzuki motorbike',
					'seller_username' => 'opu',
	 				'product_brand' => 'suzuki',
	 				'product_model'=> 'suzuki 007',
	 				'category' => 'vehicles',
	 				'subcategory'=>'motorbike',
				 	'quantity' => 4,
				 	'price' => 100000,
				 	'product_image_link' => array('public/imgs/products/vehicles/motorbike/suzuki.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 12
				]);

			Product::create([
					'product_title' => 'yamaha',
					'seller_username' => 'shovon',
	 				'product_brand' => 'yamaha',
	 				'product_model'=> 'yamaha 001',
	 				'category' => 'vehicles',
	 				'subcategory'=>'motorbike',
				 	'quantity' => 7,
				 	'price' => 120000,
				 	'product_image_link' => array('public/imgs/products/vehicles/motorbike/yamaha.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' =>8
				]);

			Product::create([
					'product_title' => 'axe chocolate',
					'seller_username' => 'anis',
	 				'product_brand' => 'axe',
	 				'product_model'=> 'chocolate_dark_temptation_axe',
	 				'category' => 'cosmetics',
	 				'subcategory'=>'body spray',
				 	'quantity' => 5,
				 	'price' => 450,
				 	'product_image_link' => array('public/imgs/products/cosmetics/body_spray/chocolate-dark-temptation_axe.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 11
				]);

			Product::create([
					'product_title' => 'sports field adidas',
					'seller_username' => 'opu',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'sports field',
	 				'category' => 'cosmetics',
	 				'subcategory'=>'body spray',
				 	'quantity' => 5,
				 	'price' => 500,
				 	'product_image_link' => array('public/imgs/products/cosmetics/body_spray/sport_field_adidas.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'incentive farmasi',
					'seller_username' => 'opu',
	 				'product_brand' => 'farmasi',
	 				'product_model'=> 'incentive farmasi',
	 				'category' => 'cosmetics',
	 				'subcategory'=>'perfume',
				 	'quantity' => 5,
				 	'price' => 800,
				 	'product_image_link' => array('public/imgs/products/cosmetics/perfume/incentive_farmasi.png'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 23
				]);

			Product::create([
					'product_title' => 'intimately',
					'seller_username' => 'shovon',
	 				'product_brand' => 'beckham',
	 				'product_model'=> 'intimately 001',
	 				'category' => 'cosmetics',
	 				'subcategory'=>'perfume',
				 	'quantity' => 5,
				 	'price' => 800,
				 	'product_image_link' => array('public/imgs/products/cosmetics/perfume/intimately_beckham.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' =>21
				]);

			Product::create([
					'product_title' => 'hugo boss',
					'seller_username' => 'anis',
	 				'product_brand' => 'boss',
	 				'product_model'=> 'perfume hugo boss',
	 				'category' => 'cosmetics',
	 				'subcategory'=>'perfume',
				 	'quantity' => 9,
				 	'price' => 100,
				 	'product_image_link' => array('public/imgs/products/cosmetics/perfume/perfume_hugo_boss.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 12
				]);

	        Product::create([
					'product_title' => 'bonnie jean dress',
					'seller_username' => 'anis',
	 				'product_brand' => 'bonnie jean',
	 				'product_model'=> 'bonnie_jean_dress',
	 				'category' => 'dress',
	 				'subcategory'=>'kids',
				 	'quantity' => 9,
				 	'price' => 100,
				 	'product_image_link' => array('public/imgs/products/dress/kids/bonnie_jean_dress.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 100
				]);

			Product::create([
					'product_title' => 'cute red frog',
					'seller_username' => 'anis',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'cute red frog',
	 				'category' => 'dress',
	 				'subcategory'=>'kids',
				 	'quantity' => 2,
				 	'price' => 800,
				 	'product_image_link' => array('public/imgs/products/dress/kids/cute_red_frog.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 32
				]);

			Product::create([
					'product_title' => 'formal kids dress',
					'seller_username' => 'shovon',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'green formal kids dress',
	 				'category' => 'dress',
	 				'subcategory'=>'kids',
				 	'quantity' => 4,
				 	'price' => 600,
				 	'product_image_link' => array('public/imgs/products/dress/kids/green_formal_kids_dress.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 43
				]);

            Product::create([
					'product_title' => 'formal kids dress pink',
					'seller_username' => 'shovon',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'pink formal kids',
	 				'category' => 'dress',
	 				'subcategory'=>'kids',
				 	'quantity' => 4,
				 	'price' => 800,
				 	'product_image_link' => array('public/imgs/products/dress/kids/pink.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 55
				]);

            Product::create([
					'product_title' => 'causal pants',
					'seller_username' => 'anis',
	 				'product_brand' => 'denim',
	 				'product_model'=> 'causal pants',
	 				'category' => 'dress',
	 				'subcategory'=>'mens',
				 	'quantity' => 9,
				 	'price' => 1800,
				 	'product_image_link' => array('public/imgs/products/dress/mens/causal_pants.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 41
				]);

            Product::create([
					'product_title' => 'formal pants',
					'seller_username' => 'shovon',
	 				'product_brand' => 'denim',
	 				'product_model'=> 'formal_light',
	 				'category' => 'dress',
	 				'subcategory'=>'mens',
				 	'quantity' => 9,
				 	'price' => 2800,
				 	'product_image_link' => array('public/imgs/products/dress/mens/formal_light.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 25
				]);

            Product::create([
					'product_title' => 'gabadin pants',
					'seller_username' => 'opu',
	 				'product_brand' => 'textmart',
	 				'product_model'=> 'gabadin',
	 				'category' => 'dress',
	 				'subcategory'=>'mens',
				 	'quantity' => 9,
				 	'price' => 3800,
				 	'product_image_link' => array('public/imgs/products/dress/mens/gabadin_pants.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 100
				]);

            Product::create([
					'product_title' => 'blue jeans',
					'seller_username' => 'opu',
	 				'product_brand' => 'textmart',
	 				'product_model'=> 'jeans blue',
	 				'category' => 'dress',
	 				'subcategory'=>'mens',
				 	'quantity' => 9,
				 	'price' => 3800,
				 	'product_image_link' => array('public/imgs/products/dress/mens/jeans_blue.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 56
				]);

            Product::create([
					'product_title' => 'narrow fit',
					'seller_username' => 'opu',
	 				'product_brand' => 'textmart',
	 				'product_model'=> 'narrow fit',
	 				'category' => 'dress',
	 				'subcategory'=>'mens',
				 	'quantity' => 9,
				 	'price' => 2500,
				 	'product_image_link' => array('public/imgs/products/dress/mens/narrow_fit.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 65
				]);

            Product::create([
					'product_title' => 'formal shirt',
					'seller_username' => 'anis',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'formal_shirt',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 4,
				 	'price' => 3500,
				 	'product_image_link' => array('public/imgs/products/dress/womens/formal_shirt.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 74
				]);

            Product::create([
					'product_title' => 'khaki pants',
					'seller_username' => 'shovon',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'Khaki_Pants',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 5,
				 	'price' => 2500,
				 	'product_image_link' => array('public/imgs/products/dress/womens/Khaki_Pants.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 73
				]);

			Product::create([
					'product_title' => 'light cyan silk saree',
					'seller_username' => 'shovon',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'light_cyan_silk',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 21,
				 	'price' => 7500,
				 	'product_image_link' => array('public/imgs/products/dress/womens/light_cyan_silk.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 83
				]);

            Product::create([
					'product_title' => 'purple silk saree',
					'seller_username' => 'anis',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'purple_silk',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 11,
				 	'price' => 9700,
				 	'product_image_link' => array('public/imgs/products/dress/womens/purple_silk.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 7
				]);

            Product::create([
					'product_title' => 'formal shirt',
					'seller_username' => 'anis',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'red_shirt',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 31,
				 	'price' => 1700,
				 	'product_image_link' => array('public/imgs/products/dress/womens/red_shirt.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'red silk saree',
					'seller_username' => 'anis',
	 				'product_brand' => 'aarong',
	 				'product_model'=> 'red_silk',
	 				'category' => 'dress',
	 				'subcategory'=>'womens',
				 	'quantity' => 21,
				 	'price' => 11700,
				 	'product_image_link' => array('public/imgs/products/dress/womens/red_silk.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'apple macbookair keyboard',
					'seller_username' => 'anis',
	 				'product_brand' => 'apple',
	 				'product_model'=> 'macbookair_q410-13_keyboard_lg',
	 				'category' => 'electronics',
	 				'subcategory'=>'computer',
				 	'quantity' => 21,
				 	'price' => 1540,
				 	'product_image_link' => array('public/imgs/products/electronics/computer/apple-macbookair-q410-13-keyboard-lg.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'asus laptop',
					'seller_username' => 'opu',
	 				'product_brand' => 'asus',
	 				'product_model'=> 'asus laptop vivo book',
	 				'category' => 'electronics',
	 				'subcategory'=>'computer',
				 	'quantity' => 5,
				 	'price' => 55400,
				 	'product_image_link' => array('public/imgs/products/electronics/computer/asus_laptop.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'dell laptop',
					'seller_username' => 'opu',
	 				'product_brand' => 'dell',
	 				'product_model'=> 'dell x01',
	 				'category' => 'electronics',
	 				'subcategory'=>'computer',
				 	'quantity' => 5,
				 	'price' => 38400,
				 	'product_image_link' => array('public/imgs/products/electronics/computer/dell.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'creative headphone',
					'seller_username' => 'shovon',
	 				'product_brand' => 'creative',
	 				'product_model'=> 'crh 005',
	 				'category' => 'electronics',
	 				'subcategory'=>'headphone',
				 	'quantity' => 5,
				 	'price' => 400,
				 	'product_image_link' => array('public/imgs/products/electronics/headphone/creative-headphone.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'google nexus',
					'seller_username' => 'opu',
	 				'product_brand' => 'google',
	 				'product_model'=> 'asus nexus',
	 				'category' => 'electronics',
	 				'subcategory'=>'smartphone',
				 	'quantity' => 5,
				 	'price' => 38400,
				 	'product_image_link' => array('public/imgs/products/electronics/smartphone/asus-google-nexus.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'htc one',
					'seller_username' => 'opu',
	 				'product_brand' => 'htc',
	 				'product_model'=> 'htc one m8',
	 				'category' => 'electronics',
	 				'subcategory'=>'smartphone',
				 	'quantity' => 7,
				 	'price' => 21400,
				 	'product_image_link' => array('public/imgs/products/electronics/smartphone/htc-one-m8-2.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'lg optimus',
					'seller_username' => 'shovon',
	 				'product_brand' => 'lg',
	 				'product_model'=> 'lg_optimus3d',
	 				'category' => 'electronics',
	 				'subcategory'=>'smartphone',
				 	'quantity' => 9,
				 	'price' => 44500,
				 	'product_image_link' => array('public/imgs/products/electronics/smartphone/lg_optimus3d.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'lumia-535',
					'seller_username' => 'shovon',
	 				'product_brand' => 'microsoft',
	 				'product_model'=> 'lumia-535',
	 				'category' => 'electronics',
	 				'subcategory'=>'smartphone',
				 	'quantity' => 11,
				 	'price' => 17500,
				 	'product_image_link' => array('public/imgs/products/electronics/smartphone/lumia-535_front_back.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'puma cricket bat',
					'seller_username' => 'shovon',
	 				'product_brand' => 'puma',
	 				'product_model'=> 'pumabat75',
	 				'category' => 'sports',
	 				'subcategory'=>'cricket',
				 	'quantity' => 3,
				 	'price' => 700,
				 	'product_image_link' => array('public/imgs/products/sports/cricket/bat_puma.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'cricket pads',
					'seller_username' => 'anis',
	 				'product_brand' => 'gecko',
	 				'product_model'=> 'batting_pads_gecko',
	 				'category' => 'sports',
	 				'subcategory'=>'cricket',
				 	'quantity' => 7,
				 	'price' => 1400,
				 	'product_image_link' => array('public/imgs/products/sports/cricket/batting_pads_gecko.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'cricket halmet',
					'seller_username' => 'shovon',
	 				'product_brand' => 'albion',
	 				'product_model'=> 'halmet_albion',
	 				'category' => 'sports',
	 				'subcategory'=>'cricket',
				 	'quantity' => 7,
				 	'price' => 400,
				 	'product_image_link' => array('public/imgs/products/sports/cricket/halmet_albion.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'football boots',
					'seller_username' => 'anis',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'football_boots_adidas',
	 				'category' => 'sports',
	 				'subcategory'=>'football',
				 	'quantity' => 5,
				 	'price' => 3400,
				 	'product_image_link' => array('public/imgs/products/sports/football/football_boots_adidas.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'soccer',
					'seller_username' => 'shovon',
	 				'product_brand' => 'nike',
	 				'product_model'=> 'nike_soccer',
	 				'category' => 'sports',
	 				'subcategory'=>'football',
				 	'quantity' => 5,
				 	'price' => 5500,
				 	'product_image_link' => array('public/imgs/products/sports/football/football_nike.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'bd WC jersey',
					'seller_username' => 'anis',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'bd jersey',
	 				'category' => 'sports',
	 				'subcategory'=>'jersey',
				 	'quantity' => 5,
				 	'price' => 500,
				 	'product_image_link' => array('public/imgs/products/sports/jersey/bd_cricket_wc_jersey.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

			Product::create([
					'product_title' => 'messi jersey',
					'seller_username' => 'opu',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'messi_jersey',
	 				'category' => 'sports',
	 				'subcategory'=>'jersey',
				 	'quantity' => 5,
				 	'price' => 1500,
				 	'product_image_link' => array('public/imgs/products/sports/jersey/messi_jersey.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);

            Product::create([
					'product_title' => 'neymar jersey',
					'seller_username' => 'shovon',
	 				'product_brand' => 'adidas',
	 				'product_model'=> 'neymar_jersey',
	 				'category' => 'sports',
	 				'subcategory'=>'jersey',
				 	'quantity' => 1,
				 	'price' => 1500,
				 	'product_image_link' => array('public/imgs/products/sports/jersey/neymar_jersey.jpg'),
				 	'product_description' => $faker->text,
				 	'discount' => 0,
				 	'product_review_text' => array($faker->text()),
				 	'product_rating' => 5,
				 	'sold_count' => 2
				]);
		}
	}
