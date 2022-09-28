<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PostsController@index');
Route::get('/create-form', 'PostsController@createForm');
Route::post('post/create','PostsController@create');
Route::get('post/{id}/update-form', 'PostsController@updateForm');
Route::post('/post/update','PostsController@update');
Route::get('/post/{id}/delete','PostsController@delete');
Route::post('/','PostsController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
