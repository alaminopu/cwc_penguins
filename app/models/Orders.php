<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Orders extends Eloquent {
	protected $fillable = ['seller_username','buyer_username','product_id',
										'product_title','product_quantity','total_price',
										'order_date','delivery_date','delivery_status'];
	protected $table = 'orders';
}
