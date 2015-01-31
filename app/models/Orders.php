<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Orders extends Eloquent {
	protected $fillable = ['seller_username','buyer_username','product_id','order_date','delivery_date','delivery_status'];
	protected $table = 'orders';
}