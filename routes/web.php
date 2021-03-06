<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');

Route::get('about', 'PaPagesController@about');
Route::get('contact', 'PaPagesController@contact');

Route::get('foo', function()
{
    return "What the frog or What the fun";
});

Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::resource('articles', 'ArticlesController');

// Route::controller([
// 		'auth' => 'Auth\AuthController',
// 		'password' => 'Auth\PasswordController',
// 	])



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
