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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('/', 'PostController');

Route::get('/{post}', 'PostController@show');

Route::post('/create', 'PostController@store');
//
//<<<<<<< HEAD
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//=======
//
//Route::post('/{post}', 'CommentsController@store');
//>>>>>>> 7597e12f20677c361575ddae7e9b3fb2bc83a2a6
