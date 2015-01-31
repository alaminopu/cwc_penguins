<?php

class ProductsController extends \BaseController {



	private $rules = array(
		'product_title' => 'required',
		'product_brand' => 'required',
		'quantity' => 'required|integer',
		'price' => 'required|numeric',
		'product_image_link' => 'required',
		'product_description' => 'required',
		'category' => 'required',
		'subcategory' => 'required'
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
	*	Get all categories
	*/
	public function getCategories(){
		$categories = Category::all();
		return Response::json($categories);
	}


	/*
	*	Get a single product
	*
	*/

	public function getSingleProduct($id){
		$product = $this->product->where('_id','=',$id)->get()->first();
		$seller = Seller::where('username','=',$product->seller_username)->get()->first();
		$single_product = array_merge($product->toArray(), $seller->toArray());
		if(count($single_product)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($single_product);
		}
	}

	/**
	*
	*	Get the latest 5 products for Home Page
	*
	**/

	public function latestProducts(){
		$products = $this->product->orderBy('_id','desc')->take(5)->get();
		if($products != null){
			return Response::json($products);
		}else{
			return Response::json(array(
				'error' => 'No latest Products!'
				));
		}
	}


	/**
	*	get products by category
	**/
	public function getProductsByCategory($category){
		$products = $this->product->where('category','=',$category)->get();
		if(count($products)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($products);
		}
	}

	/**
	*	get products by subcategory
	**/

	public function getProductsBySubCategory($subcategory){
		$products = $this->product->where('subcategory','=',$subcategory)->get();
		if(count($products)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($products);
		}
	}


	/**
	*	get products by price range
	**/

	public function getProductsByPriceRange($lower,$higher){
		$lower = intval($lower);
		$higher = intval($higher);
		$products = $this->product->whereBetween('price',array($lower,$higher))->get();
		if(count($products)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($products);
		}
	}
	/**
	*	get products by brand
	**/

	public function getProductsByBrand($brand){
		$brand = strtolower($brand);
		$products = $this->product->where('product_brand','=',$brand)->get();
		if(count($products)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($products);
		}
	}


	/**
	*	get products by price: High to Low
	**/

	// public function getProductsByMaxPrice($max){
	// 	$max = intval($max);
	// 	$products = $this->product->where('price','<=',$max)->get();
	// 	if(count($products)<1){
	// 		return Response::json(array(
	// 			'error' => 'No products found'
	// 			));
	// 	}else{
	// 		return Response::json($products);
	// 	}
	// }

	/**
	*	get products by price: Low to High
	**/

	public function getProductsByPrice($sort){
		$products = $this->product->orderBy('price',$sort)->get();
		if(count($products)<1){
			return Response::json(array(
				'error' => 'No products found'
				));
		}else{
			return Response::json($products);
		}
	}


	/**
	*	Get Products by Most sold items
	**/
	// public function getProductsByMostSold(){
	// 	$products => $this->product->orderBy('sold_count','desc')->get();
	// 	if(count($products)<1){
	// 		return Response::json(array(
	// 			'error' => 'No products found',
	// 			));
	// 	}else{
	// 		return Response::json($products);
	// 	}
	// }


	/**
	*	get products by location
	**/
	public function getProductsByLocation($location){
		$users = User::select('username')->where('address.city','=',$location)->get();
		if(count($users)>0){
			$products = array();
			foreach ($users as $user) {
				$products = $this->product->where('seller_username','=',$user->username)->get();
			}
			if($products === null){
				return Response::json(array(
					'error' => 'No products found'
					));
			}else{
				return Response::json($products);
			}
		}else{
			return Response::json(array(
				'error' => 'No products found!'
				));
		}

	}

	/**
	* Get products by seller_username
	**/
	public function getProductsByUsername($name){
		$products = $this->product->where('seller_username','=',$name)->get();
		if(count($products)>0){
			return $products;
		}else{
			return Response::json(array(
				'error' => 'Products not found'
				));
		}
	}


	/*
	* Add products
	*/


	public function addProducts()
	{

		if( $token = AuthVerifierController::verfiyAccesstoken()){

			$product_data = array(
			'product_title' => Input::get('product_title'),
			'product_brand' => strtolower(Input::get('product_brand')),
			'product_model' => Input::get('product_model'),
			'seller_username' => $token['user_id'],
			'sold_count' => 0,
			'category' => Input::get('category'),
			'subcategory'=> Input::get('subcategory'),
			'price' => intval(Input::get('price')),
			'quantity' => intval(Input::get('quantity')),
			'product_image_link' => Input::get('product_image_link'),
			'discount' => Input::get('discount'),
			'product_description' => Input::get('product_description'),
			);

			$validator = Validator::make(Input::all(),$this->rules);
			if(!$validator->fails()){
				$this->product->create($product_data);

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
			'product_brand' => strtolower(Input::get('product_brand')),
			'product_model' => Input::get('product_model'),
			'category' => Input::get('category'),
			'subcategory'=> Input::get('subcategory'),
			'price' => intval(Input::get('price')),
			'quantity' => intval(Input::get('quantity')),
			'product_image_link' => Input::get('product_image_link'),
			'product_description' => Input::get('product_description'),
			'discount' => Input::get('discount')
			);

		if( $token = AuthVerifierController::verfiyAccesstoken()){

			$product = $this->product->where('_id','=',$id)->get()->first();
			$validator= Validator::make(Input::all(),$this->rules);

			if($validator->fails() || $product === null){
				return Response::json(array(
					'error' => $validator->messages()
					));
			}else{
				$product->update($product_data);
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



	/**
	* Update number_of_times_sold field in database
	**/


	/*
	*
	* Delete a specific product
	*/
	public function deleteProduct($id)
	{
		if( $token = AuthVerifierController::verfiyAccesstoken()){
			$product = $this->product->where('_id','=',$id)->get()->first();
			if($product != null){
				$product->delete();
				return Response::json(array(
					'success' => 'Deleted successfully'
					));
			}else{
				return Response::json(array(
					'error' => 'Product not found'
					));
			}
		}else{
			return Response::json(array(
				'error' => 'Unauthorized'
			),401);
		}
	}

}
