<?php
use Jenssegers\Mongodb\Model as Eloquent;

class PenguinAuth extends Eloquent {
	protected $fillable = [];
	protected $table='oauth_clients';
}