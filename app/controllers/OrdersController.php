<?php

class OrdersController extends \BaseController {




	private $rules = array(
		'delivery_date' => 'required'
		);

	private $order;
	public function __construct(Orders $order){
		$this->order = $order;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /orders
	 *
	 * @return Response
	 */
	public function addOrder($id){
		if( $token = AuthVerifierController::verfiyAccesstoken()){ 
			$validator = Validator::make(Input::all(),$this->rules);
			if($validator->fails()){
				return Response::json(array(
					'error' => $validator->messages()
					));
			}else{
				$product = Product::select('seller_username')->where('_id','=',$id)->get()->first();
				if(count($product)>0){
				$this->order->create(array(
					'seller_username' => $product->seller_username,
					'buyer_username' => $token['user_id'],
					'product_id' => $id,
					'order_date' => date('Y-m-d'),
					'delivery_date' => Input::get('delivery_date')
					));
				return Response::json(array(
					'success' => 'Your order has successfully placed'
					));
				}else{
					return Response::json(array(
						'error' => 'order can not be placed'
						));
				}
			}
		}else{
			return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}
	}

	/**
	*	Update order service
	**/
	

	
}