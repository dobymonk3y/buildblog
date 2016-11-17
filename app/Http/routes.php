<?php
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']],function(){
	// Authentication Routes
	Route::get('auth/login','Auth\AuthController@getLogin');
	Route::post('auth/login','Auth\AuthController@postLogin');
	Route::get('auth/logout','Auth\AuthController@getLogout');

	// Registration Routes
	Route::get('auth/register','Auth\AuthController@getRegister');
	Route::post('auth/register','Auth\AuthController@postRegister');

	Route::get('/','PageController@getIndex');
	Route::get('index','PageController@getIndex');
	Route::get('about','PageController@getAbout');
	Route::get('contact','PageController@getContact');
	Route::post('contact','PageController@postContact');
	Route::resource('posts','PostController');

	Route::get('/blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d-\_]+');
	Route::get('/blog',['as' => 'blog.index','uses' =>'BlogController@getIndex']);
	Route::get('/blog/index',['as' => 'blog.index','uses' =>'BlogController@getIndex']);
});
