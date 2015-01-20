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

# Route::get('/', 'HomeController@showWelcome');
Route::get('/', 'SigninController@showSignin');
Route::get('userprofile', 'ProfileController@showProfile');

Route::group(array('prefix' => 'api'), function(){

  Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
  });


});
