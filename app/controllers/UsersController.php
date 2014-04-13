<?php

class UsersController extends BaseController {

	protected $user;

	public function __construct(User $user) 
	{
   		$this->user = $user;
   		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function postLogin()
	{
		if(Input::get('remember') == 'remember')
		{
			if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')), true))
			{
			   return Redirect::route('home');
			}
		}
		else
		{
			if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) 
			{
   			   return Redirect::route('home');
			} 
		}
	   return Redirect::to('/')
	      ->with('red-message-long', 'Whoops, incorrect username/password!')
	      ->withInput();
	}

	public function logout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::route('splash');
	}

	public function register()
	{
		$data['pageTitle'] = 'Register';
		return View::make('home.register', $data);
	}

	public function getStats()
	{
		$data['pageTitle'] = 'Stats';
		return View::make('home.stats', $data);
	}


}