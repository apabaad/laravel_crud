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

// Route::group(['middleware'=>'auth'], function(){
	
Route::get('/','ItemController@item');

Route::get('item','ItemController@item');
Route::get('item/add','ItemController@create');
Route::post('item/add','ItemController@store');
Route::get('item/edit/{id}','ItemController@edit');
Route::post('item/update','ItemController@update');
Route::get('item/delete/{id}','ItemController@delete');

// });

 Auth::routes();

Route::get('/home', 'HomeController@index');
