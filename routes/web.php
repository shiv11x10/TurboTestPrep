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

Route::get('/', 'PagesController@index');

Route::get('/who_we_are', 'PagesController@who_we_are');

Route::get('/programs', 'PagesController@programs');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');