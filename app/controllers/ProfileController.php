<?php

class ProfileController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Profile Page Controller
	|--------------------------------------------------------------------------
	*/

	public function showProfile()
	{
		return View::make('userprofile');
	}

}
