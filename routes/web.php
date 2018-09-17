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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// User Routes
Route::get('/users/list/', 'UsersController@usersList');
Route::get('/users/profile/', 'UsersController@profile');
Route::post('/users/profile/', 'UsersController@prof_image');
Route::get('/users/profile/{id}', 'UsersController@specUser');

// AJAX Live Search
Route::get('home/livesearch', 'ActivitiesController@ajaxSearch');

// Activities Routes
Route::get('activities/{id}', 'ActivitiesController@getOne');

// Types Routes
Route::get('activities/type/{type}', 'TypesController@sortTypes');

// Messages Routes
Route::post('activities/{id}/message', 'MessagesController@addMess');

Route::get('search', 'ActivitiesController@test');