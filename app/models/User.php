<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Jenssegers\Mongodb\Model as Eloquent;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'oauth_users';
	protected $fillable = ['username','email','password','first_name',
						'last_name','mobile_no','profile_photo_link','address','house_no','street_name',
						'road_no','post_code','city','country'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($password){
		 $this->attributes['password'] = Hash::make($password);
	}

}
