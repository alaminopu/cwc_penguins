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
  Route::get('profile/seller','ProfileController@getSellerProfile');
  Route::get('profile/buyer','ProfileController@getBuyerProfile');
  Route::post('profile/update/personal-info','ProfileController@updateUserData');
  Route::post('profile/update/address','ProfileController@updateAddress');
  Route::post('profile/delete','ProfileController@removeUser');
  Route::post('profile/update/password','ProfileController@updateUserPassword');

  Route::post('products/add','ProductsController@addProducts');
  Route::post('products/update/{id}','ProductsController@updateProducts');
  Route::post('products/delete/{id}','ProductsController@deleteProduct');

  Route::post('products/order','OrdersController@addOrder');

});

Route::post('oauth/token', 'AuthVerifierController@verifyCredential');
Route::post('oauth/refresh_token', 'AuthVerifierController@getAccessTokenByRefreshToken');

Route::get('user/{name}','ProfileController@getUserPublicProfile');

/* products */
Route::get('products','ProductsController@all');
Route::get('products/latest','ProductsController@latestProducts');
Route::get('products/single/{id}','ProductsController@getSingleProduct');
Route::get('products/range/{lower}/{higher}','ProductsController@getProductsByPriceRange');
Route::get('products/brand/{brand}','ProductsController@getProductsByBrand');
Route::get('products/price/{sort}','ProductsController@getProductsByPrice');
Route::get('products/category/{category}','ProductsController@getProductsByCategory');
Route::get('products/subcategory/{subcategory}','ProductsController@getProductsBySubCategory');
Route::get('products/location/{location}','ProductsController@getProductsByLocation');
Route::get('products/categories','ProductsController@getCategories');
