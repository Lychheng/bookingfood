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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/admin/create', 'productController@create');
Route::get('/admin', 'productController@index');
Route::post('/admin/create', 'productController@store')->name('uploadProduct');

Route::get('/admin/showorder', 'productController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/productview', 'productController@showProduct');

Route::get('/admin/orderview','orderController@showOrder');


Route::get('/home', 'HomeController@index')->name('home');


