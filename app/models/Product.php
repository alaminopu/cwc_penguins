<?php
use Jenssegers\Mongodb\Model as Eloquent;

class Product extends Eloquent {
	protected $fillable = ['product_title','product_brand','product_model','quantity',
							'price','product_image_link','product_category'
							,'product_description','product_subcategory'];
	protected $table = 'products';
}