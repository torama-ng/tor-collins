<?php

use Illuminate\Contracts\Auth\MustVerifyEmail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', 'PagesController@faq');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/blog', 'PagesController@blog');
Route::get('/services', 'PagesController@services');
Route::get('/company', 'PagesController@company');
Route::get('/search', 'JobsController@search');
Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware(['auth', 'auth.admin']);
Route::get('/browse-resume', function() {
    return view('pages.browse-resume');
});
Auth::routes(['verify' => true]);
Route::resource('jobs', 'JobsController');
Route::resource('resumes', 'ResumesController');
Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');
