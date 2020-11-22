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

Route::get('/','BooksController@index')->name('indexpage');
Route::get('/add_books','BooksController@add_book')->name('addbooks');
Route::post('/add_books','BooksController@store')->name('storebooks');

Route::post("/admindestroy",'BooksController@destroy')->name('admindestroy');

Route::get('single={id}','BooksController@show')->name('showmore');

Route::get('edit={id}','BooksController@edit')->name('adminedit');

Route::post('update','BooksController@update')->name('adminupdate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
