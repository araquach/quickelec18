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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/commercial', 'PagesController@commercial');
Route::get('/domestic', 'PagesController@domestic');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'PagesController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'PagesController@sendEmail']);