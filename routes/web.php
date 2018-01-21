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
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'PostController');
Route::resource('/posts', 'PostController');
Route::post('/like', 'PostController@postLikePost')->name('like');
Route::post('/{post}', 'CommentsController@store');
Route::post('/create', 'PostController@store');
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/articles', 'PostController@articles');
    Route::get('/{post}/edit', 'PostController@edit');
});
Route::get('/{post}', 'PostController@show');
