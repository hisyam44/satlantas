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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/accident',function (){
	$accidents = new App\Accident;
	$accidents = $accidents->all();
	print($accidents);
});
Route::group(['prefix' => 'api', 'middleware' => ['api']], function () {
	Route::post('user','Api\UserController@login');
	Route::post('user/signup','Api\UserController@signUp');
	Route::group(['middleware' => ['jwt.auth']],function (){
		Route::get('user/me','Api\UserController@index');
		Route::get('user/refresh-token','Api\UserController@refreshToken');
		Route::get('accident','AccidentController@index');
	});
});