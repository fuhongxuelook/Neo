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

Route::group(['namespace'=> 'Item'],function() {

	Route::get('/recommends','RestfulController@itemRecommends');

	Route::get('/item','RestfulController@itemInfo'); 

	Route::get('/filter','RestfulController@itemFilter'); 
});
