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
    //return view('welcome');
    return view('internals.home');
});
Route::get('/test',function (){
   return view('welcome');
});
Route::get('/lpu','TestController@abc');
Route::get('customers', 'CustomersController@list');
Route::post('customers', 'CustomersController@store');
Route::view('about', 'internals.about');
Route::view('contact', 'internals.contact');
