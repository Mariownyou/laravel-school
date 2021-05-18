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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// App routes
Route::view('/home', 'pages.home')->name('home');
Route::view('/info', 'pages.information')->name('info');
Route::view('/about', 'pages.information')->name('about');

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::get('/news', 'App\Http\Controllers\PostController@news')->name('news');
Route::get('/news/{class}', 'App\Http\Controllers\HomeController@news_class')->name('news_class');

Route::get('/parents', 'App\Http\Controllers\PostController@parents')->name('parents');
Route::get('/parents/{class}', 'App\Http\Controllers\HomeController@parents_class')->name('parents_class');


Route::get('/students', 'App\Http\Controllers\PostController@students')->name('students');
Route::get('/students/{class}', 'App\Http\Controllers\HomeController@students_class')->name('students_class');


