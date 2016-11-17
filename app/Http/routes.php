<?php
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']],function(){
});

Route::get('/','PageController@getIndex');
Route::get('index','PageController@getIndex');
Route::get('about','PageController@getAbout');
Route::get('contact','PageController@getContact');
Route::post('contact','PageController@postContact');
Route::resource('posts','PostController');

Route::get('/blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d-\_]+');
Route::get('/blog',['as' => 'blog.index','uses' =>'BlogController@getIndex']);
Route::get('/blog/index',['as' => 'blog.index','uses' =>'BlogController@getIndex']);