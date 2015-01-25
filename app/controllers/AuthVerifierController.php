<?php

class AuthVerifierController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /authverifier
	 *
	 * @return Response
	 */
	public function verifyCredential()
	{
		$addtional_credentials = array(
			'grant_type' => 'password',
			'client_id'  => 'testclient',
			'client_secret' => 'testpass',
		);

		$_POST = array_merge($_POST, $addtional_credentials);

		$bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromGlobals();
		$bridgedResponse = new OAuth2\HttpFoundationBridge\Response();

		$bridgedResponse = App::make('oauth2')->handleTokenRequest($bridgedRequest, $bridgedResponse);

		return $bridgedResponse;
	}


	public static function verfiyAccesstoken(){

		$bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromGlobals();
		$bridgedResponse = new OAuth2\HttpFoundationBridge\Response();

		if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {

			$token = App::make('oauth2')->getAccessTokenData($bridgedRequest);
			
			return $token;
		}
	}


}
