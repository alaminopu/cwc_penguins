<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Buyer extends Eloquent {
	protected $fillable = ['buyer_username','wishlist','purchased_items'];
	protected $table = 'buyer';
}