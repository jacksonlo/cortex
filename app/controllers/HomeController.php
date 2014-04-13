<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		if(Auth::check()) return Redirect::route('home');
		$data['pageTitle'] = 'Start';
		return View::make('home.splash', $data);
	}

	public function showAbout()
	{
		$data['pageTitle'] = 'About Cortex';
		return View::make('home.about', $data);
	}

	public function showHome()
	{
		$data['pageTitle'] = 'Home';
		return View::make('home.home', $data);
	}

}