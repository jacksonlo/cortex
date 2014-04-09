<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'splash', 'uses' => 'HomeController@showWelcome'));

Route::get('/home', array('as' => 'home', 'uses' => 'HomeController@showHome'));

Route::post('/getDetail', array('as' => 'getDetail', 'uses' => 'WordController@getDetail'));

Route::get('/about', array('as' => 'about', 'uses' => 'HomeController@showAbout'));
