<?php

class ProfileController extends BaseController {


	private $user;
	private $rules = array(
			'first_name' => 'required',
			'last_name' => 'required',
			'mobile_no' => 'required|numeric'
		);

	/**
	*	Instantiate User object
	*/

	public function __construct(User $user){
		$this->user = $user;
	}

	/**
	* Get user Profile Data
	*/
	public function getUserProfile()
	{
		if( $token = AuthVerifierController::verfiyAccesstoken() ){

				$user = $this->user->where('username','=',$token['user_id'])->get()->first();

				return Response::json($user);

		}else{

				return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}

	}

	/**
	*	Get Seller private Profile info
	**/
	public function getSellerProfile(){

		if( $token = AuthVerifierController::verfiyAccesstoken()){

			$seller = Seller::where('seller_username','=',$token['user_id'])->get()->first();
			if(count($seller)>=0){
				$products = Product::where('seller_username','=',$token['user_id'])->get();
				if(count($products)<1){
					return Response::json(array(
						'error' => 'Product not found'
						));
				}
				$orders = Orders::where('seller_username','=',$token['user_id'])->get();
				if(count($orders)<1){
					return Response::json(array(
						'error' => 'No order history for this user'
						));
				}
				$data = array_merge($seller->toArray(),$products->toArray());
				$seller_profile = array_merge($data,$orders->toArray());
				if(count($seller_profile)>0){
					return Response::json($seller_profile);
			}
			}
		}else{
			return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}
	}

	/**
	*	get buyer private page
	**/

	public function getBuyerProfile(){
		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$buyer = Buyer::where('buyer_username','=',$token['user_id'])->get()->first();
			$orders = Orders::where('buyer_username','=',$token['user_id'])->get();
			$products = array();
			foreach($orders as $order){
				$products = Product::where('_id','=',$order->product_id)->get();
			}
			$purchased_items = $buyer->purchased_items;
			$purchased_products = array();
			foreach($purchased_items as $item){
				$purchased_products[] = Product::where('_id','=',$item)->get();
			}
			$data = array_merge($buyer->toArray(),$products);
			$buyer_info = array_merge($data,$purchased_products);
			return Response::json($buyer_info);
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

		$extended_rules =array(
				'username' => 'required|min:3|unique:oauth_users,username',
				'password' => 'required|min:6',
				'email' => 'required|email|unique:oauth_users,email'
			);
		$rules = array_merge($this->rules, $extended_rules);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){
			return Response::json(array(
				'error' => $validator->messages()
			));
		}else{
			$user = $this->user->create(array(
				'username' => Input::get('username'),
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'mobile_no' => Input::get('mobile_no'),
				'profile_photo_link' => 'public/imgs/profile/kowalski.jpg'
			));
			$seller = Seller::create(array(
				'username' => $user->username
				));
			$buyer = Buyer::create(array(
				'username' => $user->username
				));
			return Response::json(array(
				'success' => 'Congratulation! Signup successfull'
			));
		}

	}

	/*
	*	Get User's public profile
	*/


	public function getUserPublicProfile($name){
		$user = $this->user->where('username','=',$name)->get()->first();
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


	/*
	* Update/Create User profile
	*/


	public function updateUserData(){

		$user_data = array(
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'email' => Input::get('email'),
			'profile_photo_link' => Input::get('profile_photo_link'),
			'mobile_no' => Input::get('mobile_no'),
			'payment' => Input::get('payment')
			);

		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$user = $this->user->where('username','=',$token['user_id'])->get()->first();
			$rules = $this->rules;
			if($user->email != Input::get('email')){
				$extended_rules = array(
					'email' => 'required|email|unique:oauth_users'
					);
				$rules = array_merge($this->rules,$extended_rules);
			}
			$validator = Validator::make(Input::all(),$rules);

			if($user === null || $validator->fails()){
				return Response::json(array(
					'error' => $validator->messages()
					));
			}else{
				$user->update($user_data);
				return Response::json(array(
					'success' => 'Successfully Updated!'
					));
			}
		}else{
			return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}
	}

	/*
	*	Update/create user address
	*/

	public function updateAddress(){
		$user_data = array(
			'address' => array(
				'house_no' => Input::get('house_no'),
				'street_name' => Input::get('street_name'),
				'road_no' => Input::get('road_no'),
				'post_code' => Input::get('post_code'),
				'city' => Input::get('city'),
				'country' => Input::get('country')
			));
		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$user = $this->user->where('username','=',$token['user_id'])->get()->first();
			$address_rules = array(
				'house_no' => 'required',
				'street_name' => 'required',
				'road_no' => 'required',
				'post_code' => 'required',
				'city' => 'required',
				'country' => 'required'
				);
			$validator = Validator::make(Input::all(),$address_rules);
			if($validator->fails() || $user === null){
				return Response::json(array(
					'error' => $validator->messages()
					));
			}else{
				$user->update($user_data);
				return Response::json(array(
					'success' => 'Successfully updated'
					));
			}

		}else{
			return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}
	}

	/*
	*Update user password
	*
	*/
	public function updateUserPassword(){
		$pass_rules = array(
			'new_password' => 'required|min:6',
			);

		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$user = $this->user->where('username','=',$token['user_id'])->get()->first();
			if(Hash::check(Input::get('old_password'), $user->password)){

				$validator = Validator::make(Input::all(),$pass_rules);

				if(!$validator->fails() || $user != null){
					$user->update(array(
						'password' => Input::get('new_password')

						));
					return Response::json(array(
						'success' => 'Password updated!'
					));
				}else{
					return Response::json(array(
						'error' => $validator->messages()
					));
				}
			}else{
				return Response::json(array(
					'error' => 'Password does not match'
					));
			}
		}else{
			return Response::json(array(
				'error' => 'Unauthorized'
			),401);
		}

	}




	/*
	*	Removing user
	*/


	// public function removeUser(){
	// 	if( $token = AuthVerifierController::verfiyAccesstoken()){
	// 		$user = $this->user->where('username','=',$token['user_id'])->get()->first();
	// 		if($user != null){
	// 			$user->delete();
	// 			return Response::json(array(
	// 				'success' => 'Successfully deleted!'
	// 				));
	// 		}
	// 	}else{
	// 		return Response::json(array(
	// 				'error' => 'Unauthorized'
	// 			),401);
	// 	}
	// }

}
