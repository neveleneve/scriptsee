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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/login', 'GuestController@login');
Route::post('/login', 'GuestController@loggin_in');
Route::get('/', 'GuestController@index');
Route::get('/item/{code}', 'GuestController@item_view');
Route::get('/user/{username}', 'GuestController@user_view');
Route::get('/search', 'GuestController@search');


