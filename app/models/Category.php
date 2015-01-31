<?php
use Jenssegers\Mongodb\Model as Eloquent;

class Category extends Eloquent {
	protected $fillable = ['category_name','subcategory_name'];
	protected $table = 'categories';
}