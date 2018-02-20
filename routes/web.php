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





Route::get('inventario', 'BienNacionalController@index')->name('inventario_path');

Route::get('inventario/create', 'BienNacionalController@create')->name('inventario_create_path');

Route::get('inventario/{bien}', 'BienNacionalController@show')->name('inventario_path');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
