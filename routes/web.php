<?php



Route::get('inventario', 'BienNacionalController@index')->name('inventario_path');

Route::get('inventario/create', 'BienNacionalController@create')->name('inventario_create_path');

Route::post('inventario/store', 'BienNacionalController@store')->name('store_inventario_path');

Route::get('inventario/{bien}', 'BienNacionalController@show')->name('inventario_path');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

