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
    return redirect()->route('news');
});

Auth::routes();


// App routes
Route::redirect('/home', 'news');
Route::view('/about', 'pages.about')->name('about');

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('questions', 'App\Http\Controllers\Questions');

Route::get('/new', 'App\Http\Controllers\PostController@create')->name('new');
Route::get('/questions/{id}/answer', 'App\Http\Controllers\Questions@answer')->name('answer');
Route::post('/questions/{id}/answer', 'App\Http\Controllers\Questions@answer_store')->name('answer.store');
Route::put('/questions/{id}/answer', 'App\Http\Controllers\Questions@answer_update')->name('answer.update');

Route::get('/news', 'App\Http\Controllers\PostController@news')->name('news');
Route::get('/news/{class}', 'App\Http\Controllers\HomeController@news_class')->name('news_class');

Route::get('/class', 'App\Http\Controllers\PostController@class')->name('class');
Route::get('/class/{class}', 'App\Http\Controllers\HomeController@sort_by_class')->name('classes');

