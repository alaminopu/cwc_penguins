<?php

class ProductsController extends \BaseController {



	private $rules = array(
		'product_title' => 'required',
		'product_brand' => 'required',
		'quantity' => 'required|integer',
		'price' => 'required|numeric',
		'product_image_link' => 'required',
		'product_description' => 'required',
		'category' => 'required'
		);



	private $product;
	public function __construct(Product $product){
		$this->product = $product;
	}

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function all()
	{

			$products = Product::all();
			return Response::json($products);

	}


	/**
	* 
	*	Get the latest 5 products for Home Page	
	*
	**/

	public function latestProducts(){
		$products = Product::orderBy('_id','desc')->take(5)->get();
		if($products != null){
			return Response::json($products);
		}else{
			return Response::json(array(
				'error' => 'No latest Products!'
				));
		}
	}


	/*
	* Updating/creating products
	*/


	public function addProducts()
	{
		$product_data = array(
			'product_title' => Input::get('product_title'),
			'product_brand' => Input::get('product_brand'),
			'product_category' => array(
				'category' => Input::get('category'),
				'subcategory'=> array(
					Input::get('subcategory')
					)
				),
			'price' => Input::get('price'),
			'quantity' => Input::get('quantity'),
			'product_image_link' => Input::get('product_image_link'),
			'discount' => Input::get('discount'),
			'product_description' => Input::get('product_description'),
			'product_review' => array(
				'review_text' => Input::get('review_text'),
				'rating' => Input::get('rating')
				)
			);

		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$validator = Validator::make(Input::all(),$this->rules);
			if(!$validator->fails() && $this->product->create($product_data)){
				return Response::json(array(
					'success' => 'Added successfully!'
					));
			}else{
				return Response::json(array(
					'error' => $validator->messages()
					));
			}
			
		}else{
			return Response::json(array(
					'error' => 'Unauthorized'
				),401);
		}		
	}



	/*
	*	Update Products
	*/
	public function updateProducts($id){

		$product_data = array(
			'product_title' => Input::get('product_title'),
			'product_brand' => Input::get('product_brand'),
			'product_category' => array(
				'category' => Input::get('category'),
				'subcategory'=> array(
					Input::get('subcategory')
					)
				),
			'price' => Input::get('price'),
			'quantity' => Input::get('quantity'),
			'product_image_link' => Input::get('product_image_link'),
			'product_description' => Input::get('product_description'),
			'discount' => Input::get('discount'),
			'product_review' => array(
				'review_text' => Input::get('review_text'),
				'rating' => Input::get('rating')
				)
			);

		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$product = $this->product->where('_id','=',$id)->get()->first();
			$validator= Validator::make(Input::all(),$this->rules);
			if($validator->fails() || $product === null){
				return Response::json(array(
					'error' => $validator->messages()
					));
			}else{
				$this->product->update($product_data);
				return Response::json(array(
					'success' => 'Updated successfully'
					));
			}
		}else{
			return Response::json(array(
				'error' => 'Unauthorized'
			),401);
		}	
	}



	/*
	*	Get a single product
	*
	*/

	public function getSingleProduct($id){
		$product = $this->product->where('_id','=',$id)->get()->first();
		return Response::json($product);
	}


	/*
	*
	*
	*/
	public function destroy($id)
	{
		$product = $this->product->where('_id','=',$id)->get()->first();
		if($product != null){
			$this->product->delete();
			return Response::json(array(
				'success' => 'Deleted successfully'
				));
		}else{
			return Response::json(array(
				'error' => 'Product not found'
				));
		}
	}

}
