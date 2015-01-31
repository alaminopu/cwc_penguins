<?php
use Jenssegers\Mongodb\Model as Eloquent;

class Product extends Eloquent {
	protected $fillable = ['product_title','product_brand','product_model','quantity',
							'price','product_image_link','category'
							,'product_description','subcategory','seller_username','sold_count','discount'];
	protected $table = 'products';

}