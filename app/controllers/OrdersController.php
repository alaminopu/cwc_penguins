<?php

class OrdersController extends \BaseController {

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
	public function addOrder(){
		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$this->order->create(array(
				'seller_username' => Input::get('seller_username'),
				'buyer_username' => $token['user_id'],
				'product_id' => Input::get('product_id'),
				'product_title' => Input::get('product_title'),
				'product_quantity' => Input::get('quantity'),
				'total_price' => Input::get('total_price'),
				'order_date' => date('Y-m-d'),
				'delivery_date' => '',
				'delivery_status' => false
				));

				return Response::json(array(
					'success' => 'Your order has successfully placed'
				));
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
