<?php
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']],function(){
	// Authentication Routes
	Route::get('auth/login',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
	Route::post('auth/login','Auth\AuthController@postLogin');
	Route::get('auth/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

	// Registration Routes
	Route::get('auth/register','Auth\AuthController@getRegister');
	Route::post('auth/register','Auth\AuthController@postRegister');

    // 密码重置链接的路由...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // 密码重置的路由...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

	Route::get('/','PageController@getIndex');
	Route::get('index','PageController@getIndex');
	Route::get('about','PageController@getAbout');
	Route::get('contact','PageController@getContact');
	Route::post('contact','PageController@postContact');
	Route::resource('posts','PostController');

	Route::get('/blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d-\_]+');
	Route::get('/blog',['as' => 'blog.index','uses' =>'BlogController@getIndex']);
	Route::get('/blog/index',['as' => 'blog.index','uses' =>'BlogController@getIndex']);

	Route::resource('tags','TagController',['except'=>['create']]);

	//Categories
	Route::resource('categories','CategoryController',['except'=>['create']]);
//	Route::resource('categories','CategoryController',['only'=>['create','index']]);
});

