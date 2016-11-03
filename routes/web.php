<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
*/
Route::resource('blog','BlogController');
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
Route::get('blog/{id}/edit', 'BlogController@edit');
Route::get('blog/store', 'BlogController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('admin/users', 'Admin\\UsersController');
