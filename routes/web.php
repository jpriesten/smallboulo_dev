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

Route::get('/', 'PostController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index');

// Manage user sign-up, log-in and log-out
Route::get('/login', 'UserConfigController@log_in')->name('login');
Route::get('/signup', 'UserConfigController@sign_up');
Route::post('/signup', 'UserConfigController@storeSign_up');
Route::get('/logout', 'UserConfigController@destroy');

// Employer routes
Route::get('/employer', 'EmployerController@index');
Route::get('/employer/profile', 'EmployerController@profile');
Route::get('/employer/postJob', 'EmployerController@postJob');
Route::get('/employer/notifications', 'EmployerController@notifications');
Route::get('/employer/myPosts', 'EmployerController@myPosts');

// Manage search results
Route::get('/searchResult/{post}', 'EmployerController@searchResult');
Route::post('/searchResults', 'PostController@searchResults');


// Manage employer posts
Route::post('/posts', 'PostController@store');

// Worker routes
Route::get('/worker', 'WorkerController@index');
Route::get('/worker/profile', 'WorkerController@profile');
Route::get('/worker/catalog', 'WorkerController@catalog');
Route::get('/worker/requests', 'WorkerController@requests');
Route::get('/worker/notification', 'WorkerController@notification');
Route::get('/worker/searchResults', 'WorkerController@searchResults');
