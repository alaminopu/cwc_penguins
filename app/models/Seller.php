<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Seller extends Eloquent {
	protected $fillable = ['username','product_id','achievement','seller_review','review_text','rating'];
	protected $table = 'seller';
}