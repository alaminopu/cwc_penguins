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

  $mongo = new \MongoClient();
  $storage = new OAuth2\Storage\Mongo($mongo);

  $server = new OAuth2\Server($storage);

  $server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
  $server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));

  return $server;
});



# Route::get('/', 'HomeController@showWelcome');
Route::get('/', 'SigninController@showSignin');
Route::get('userprofile', 'ProfileController@showProfile');

Route::group(array('prefix' => 'api'), function(){

  Route::post('oauth/token', function()
  {
    $bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
    $bridgedResponse = new OAuth2\HttpFoundationBridge\Response();

    $bridgedResponse = App::make('oauth2')->handleTokenRequest($bridgedRequest, $bridgedResponse);

    return $bridgedResponse;
  });


  Route::get('private', function()
  {
    $bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
    $bridgedResponse = new OAuth2\HttpFoundationBridge\Response();

    if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {

      $token = App::make('oauth2')->getAccessTokenData($bridgedRequest);

      return Response::json(array(
        'private' => 'stuff',
        'user_id' => $token['user_id'],
        'client'  => $token['client_id'],
        'expires' => $token['expires'],
      ));
    }
    else {
      return Response::json(array(
        'error' => 'Unauthorized'
      ), $bridgedResponse->getStatusCode());
    }
  });


});
