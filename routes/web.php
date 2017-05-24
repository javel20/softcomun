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
    return view('principal/ini');
});

Route::get('/principal/ini', function () {
    return view('/principal/ini');
});


Route::get('/principal/nosotros', function () {
    return view('/principal/nosotros');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
