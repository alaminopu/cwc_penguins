<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Buyer extends Eloquent {
	protected $fillable = ['username'];
	protected $table = 'buyer';
}