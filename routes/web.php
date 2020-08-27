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
    return view('public/beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/nouns', 'AdminController@nouns')->name('nouns');
    Route::get('/get-nouns', 'AdminController@get_nouns')->name('get-nouns');
});

Route::get('/play', 'HomeController@play')->name('play');
Route::get('/play/{id}', 'HomeController@play')->name('play')->where('id', '[5-9]+');
Route::post('/save', 'HomeController@save')->name('save');

