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

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/', 'PostController');

Route::get('/articles', 'PostController@articles');

Route::get('/{post}', 'PostController@show');

Route::get('/{post}/edit', 'PostController@edit');

Route::resource('/posts','PostController');


Route::post('/like','PostController@postLikePost')->name('like');

Route::post('/{post}', 'CommentsController@store');

Route::post('/create', 'PostController@store');





