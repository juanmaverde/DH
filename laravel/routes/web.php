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

Route::get('/procedures', 'PagesController@procedures');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/notifications', 'PagesController@notifications');

Route::get('/procedures/{procedure}','ProceduresController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
