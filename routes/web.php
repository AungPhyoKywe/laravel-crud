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
Route::get('/',function(){
   return view('home');

});


Route::get('/admin',function(){
   return view('admin');

});

Route::get('/table',function(){
   return view('table');

});

Route::post('/table','productController@store');

Route::get('/table','productController@index');
Route::get('/{id}','productController@delete');
Route::get('/table/{id}','productController@show');
Route::post('table/{id}','productController@edit'); 

