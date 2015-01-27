<?php

class ProfileController extends BaseController {

	/**
	* Get user Profile Data
	*/
	public function getUserProfile()
	{
		if( $token = AuthVerifierController::verfiyAccesstoken() ){

				$user = User::where('username','=',$token['user_id'])->get()->first();

				return Response::json($user);

		}else{

				return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}

	}

	/**
	* User Signup
	*/
	public function signup(){
		$rules = array(
			'username' => 'required|unique:oauth_users,username',
			'email' => 'required|email|unique:oauth_users,email',
			'password' => 'required|min:6'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){
			return Response::json(array(
				'error' => $validator->messages()
			));
		}else{
			$user = User::create(array(
				'username' => Input::get('username'),
				'email' => Input::get('email'),
				'password' => Input::get('password')
			));

			return Response::json(array(
				'success' => 'Congratulation! Signup successfull'
			));
		}

	}

	public function getUserPublicProfile($name){
		$user = User::where('username','=',$name)->get()->first();
		if($user != null){
			return Response::json(array(
				'username' => $user->username,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'profile_photo_link' => $user->profile_photo_link,
				'address' => $user->address
				));
		}else{
			return Response::json(array(
				'error' => 'Not found!'
				),404);
		}
	}

}
