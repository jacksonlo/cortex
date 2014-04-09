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
		$data['pageTitle'] = 'Start';
		return View::make('home.splash', $data);
	}

	public function showHome()
	{
		$data['all'] = Traditional::all()->take(10);

		$data['csrf_token'] = true;
		$data['pageTitle'] = 'Home';
		return View::make('home.home', $data);
	}

	public function showAbout()
	{
		$data['pageTitle'] = 'About';

		return View::make('home.about', $data);
	}

}