<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Seller extends Eloquent {
	protected $fillable = ['seller_username','achievement','review_text','rating'];
	protected $table = 'seller';
}