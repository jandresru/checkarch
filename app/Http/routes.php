<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('architecs', 'ArchitecsController@index');

Route::get('architec/{id}', 'ArchitecsController@architec');

Route::get('architec/{id}/{project}', 'ArchitecsController@project');


Route::get('projects', 'ProjectsController@index');

//Route::get('my-profile', 'UserController@myProfile');

Route::group(['prefix' => 'my-profile', 'middleware' => 'auth'], function(){
	Route::get('', 'UserController@index');
	Route::put('', 'UserController@update');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function(){
	Route::resource('users', 'UsersController');
});