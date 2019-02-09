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

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ipaddress', 'IPAddressController@index')->name('ipaddress');
Route::get('ipaddress/create', 'IPAddressController@create');
Route::post('ipaddress/store', 'IPAddressController@store');
Route::get('ipaddress/edit/{id}', 'IPAddressController@edit');
Route::post('ipaddress/update/{id}', 'IPAddressController@update');
Route::get('ipaddress/destroy/{id}', 'IPAddressController@destroy');
