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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'RegisterBuyerSellerController@registerSelection')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/register-buyer', 'RegisterBuyerSellerController@registerBuyer')->name('registerBuyer');
Route::get('/register-supplier', 'RegisterBuyerSellerController@registerSupplier')->name('registerSupplier');


Route::get('/register-selection', 'RegisterBuyerSellerController@registerSelection');