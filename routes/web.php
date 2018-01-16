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

Route::get('/article', 'HomeController@article')->name('article');
Route::resource('/posts.article','PostController');
//Route::get('posts/{post}/article','PostController@index')->name('article');
Route::get('posts/{post}/article/{article}/edit','PostController@edit')->name('posts.edit');






Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'PostController');
Route::get('/{post}', 'PostController@show');
Route::post('/like','PostController@postLikePost')->name('like');
Route::post('/create', 'PostController@store');
Route::post('/{post}', 'CommentsController@store');

