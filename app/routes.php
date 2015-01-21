<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Oauth server
App::singleton('oauth2', function() {

  $storage = new OAuth2\Storage\Mongo(DB::connection()->getMongodb());

  $server = new OAuth2\Server($storage);

  $server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
  $server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));

  return $server;
});



Route::get('/', 'HomeController@showWelcome');
#Route::get('/', 'SigninController@showSignin');
#Route::get('userprofile', 'ProfileController@showProfile');

Route::group(array('prefix' => 'api', 'before'=>'oauth'), function(){
  Route::get('verify', 'AuthVerifierController@verfiyAccesstoken');
});


Route::post('oauth/token', 'AuthVerifierController@verifyCredential');
