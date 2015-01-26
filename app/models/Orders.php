<?php
use Jenssegers\Mongodb\Model as Eloquent;


class Orders extends Eloquent {
	protected $fillable = [];
	protected $table = 'orders';
}