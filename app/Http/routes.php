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


Route::auth();
Route::group(['middleware' => 'auth'], function () { 
	Route::get('/', 'HomeController@index');
	Route::resource('/accident','AccidentController');
	Route::resource('/user','UserController');
	Route::resource('/place','PlaceController');
});
Route::group(['prefix' => 'api', 'middleware' => ['api']], function () {
	Route::get('/',function (){
		echo "API v1";
	});
	Route::post('user','Api\UserController@login');
	Route::post('user/signup','Api\UserController@signUp');
	Route::group(['middleware' => ['jwt.auth']],function (){
		Route::get('user/me','Api\UserController@index');
		Route::post('user/update','Api\UserController@update');
		Route::get('user/refresh-token','Api\UserController@refreshToken');
		Route::post('accident/create','Api\AccidentController@store');
		Route::post('accident/upload','Api\AccidentController@upload');
		Route::post('accident/update','Api\AccidentController@update');
		Route::get('accident/type/{type}','Api\AccidentController@index');
		Route::get('accident/type/{type}/{limit}','Api\AccidentController@limit');
		Route::get('accident/getDate','Api\AccidentController@getDate');
		Route::get('accident/getLastDateUpdate','Api\AccidentController@getLastDateUpdate');
		Route::get('getMenuList','Api\AccidentController@getMenuList');
		Route::get('accident/photo/{id}','Api\AccidentController@photo');
		Route::get('info','Api\InfoController@index');
		Route::get('regident','Api\InfoController@allRegident');
		Route::get('phone','Api\InfoController@phone');
		Route::post('comment','Api\CommentController@store');
	});
});