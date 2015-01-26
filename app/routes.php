<?php

// Oauth server
App::singleton('oauth2', function() {

  // MongoUpd is cutom class extends from Mongo
  $storage = new MongoUpd(DB::connection()->getMongodb());

  $server = new OAuth2\Server($storage);

  $server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
  $server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
  $server->addGrantType(new OAuth2\GrantType\RefreshToken($storage));

  return $server;
});


/* dummy page */
Route::get('/', 'HomeController@showWelcome');


Route::post('signup','ProfileController@signup');

Route::group(array('prefix' => 'api', 'before'=>'oauth'), function(){

  Route::get('profile', 'ProfileController@getUserProfile');
  Route::get('products','ProductsController@index');


});

Route::post('oauth/token', 'AuthVerifierController@verifyCredential');
Route::post('oauth/refresh_token', 'AuthVerifierController@getAccessTokenByRefreshToken');

Route::get('user/{name}','ProfileController@getUserPublicProfile');
