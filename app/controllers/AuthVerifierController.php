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


	public function verfiyAccesstoken(){

		$bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromGlobals();
		$bridgedResponse = new OAuth2\HttpFoundationBridge\Response();

		if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {

			$token = App::make('oauth2')->getAccessTokenData($bridgedRequest);

			$user = User::where('username','=',$token['user_id'])->get()->first();
			return Response::json(array(
					'username' => $user->username,
					'fist_name' => $user->first_name,
					'last_name' => $user->last_name,
					'email' => $user->email,
				));
		}
		else {
			return Response::json(array(
				'error' => 'Unauthorized'
			), $bridgedResponse->getStatusCode());
		}
	}


}
