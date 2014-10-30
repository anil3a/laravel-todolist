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

Route::bind('task', function($value, $route){
    return Task::where('id', $value)->first();
});


Route::get('/', array( 'as' => 'home', 'uses' => 'HomeController@getIndex' ))->before('auth');
Route::post('/', array( 'uses' => 'HomeController@postIndex' ))->before('csrf');

Route::get('/new', array( 'as' => 'new', 'uses' => 'HomeController@getNew'));
Route::post('/new', array( 'uses' => 'HomeController@postNew'))->before('csrf');

Route::get('/delete/{task}', array( 'as' => 'delete', 'uses' => 'HomeController@getDelete'));

Route::get('/login', array( 'as' => 'login', 'uses' => 'AuthController@getlogin' ));
Route::post('login', array( 'uses' => 'AuthController@postLogin' ))->before('csrf');

Route::get('logout', array( 'as' => 'logout', 'uses'=>'AuthController@logout'));

Route::get('/admin', array( 'as' => 'admin', 'uses' => 'AdminController@getIndex' ) );

Route::get('/password/remind', array( 'as' => 'password.remind', 'uses' => 'RemindersController@getRemind' ));
Route::post('password/remind', array( 'uses' => 'RemindersController@postRemind' ))->before('csrf');

Route::get('/password/reset', array( 'as' => 'password.reset', 'uses' => 'RemindersController@getReset' ));
Route::get('/password/reset/{token}', array( 'as' => 'password.reset', 'uses' => 'RemindersController@getReset' ));
Route::post('password/reset', array( 'uses' => 'RemindersController@postReset' ))->before('csrf');
