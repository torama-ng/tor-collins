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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');
Route::get('/form', 'PagesController@form');
Route::get('/customers', 'PagesController@customers');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Route::get('/search', 'PostsController@search');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
