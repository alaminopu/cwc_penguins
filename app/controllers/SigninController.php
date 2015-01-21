<?php

class SigninController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Signin Page Controller
	|--------------------------------------------------------------------------
	*/

	public function showSignin()
	{
		return View::make('signin');
	}

	public function signup(){
		$rules = array(
			'username' => 'required|min:6',
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
}
