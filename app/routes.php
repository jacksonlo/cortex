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

Route::post('/getDetail', array('as' => 'getDetail', 'uses' => 'WordController@getDetail'))->before('auth');

Route::get('/about', array('as' => 'about', 'uses' => 'HomeController@showAbout'))->before('auth');

Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@postLogin'));

Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));

Route::post('/know', array('as' => 'know', 'uses' => 'WordController@know'))->before('auth');

Route::get('/register', array('as' => 'register', 'uses' => 'UsersController@register'));

Route::get('/stats', array('as' => 'stats', 'uses' => 'UsersController@getStats'))->before('auth');


//**** CEREBRAL *****************

Route::get('/cerebral/instructions', array('as' => 'cerebral_instructions', 'uses' => 'CerebralController@showInstructions'))->before('auth');

Route::get('/cerebral/about', array('as' => 'cerebral_about', 'uses' => 'CerebralController@showAbout'));

Route::get('/cerebral', array('as' => 'cerebral', 'uses' => 'CerebralController@showCerebral'))->before('auth');


//**** TEMPORAL *****************

Route::get('/temporal/instructions', array('as' => 'temporal_instructions', 'uses' => 'TemporalController@showInstructions'))->before('auth');

Route::get('/tempral/about', array('as' => 'temporal_about', 'uses' => 'TemporalController@showAbout'));

Route::get('/temporal', array('as' => 'temporal', 'uses' => 'TemporalController@showCerebral'))->before('auth');











