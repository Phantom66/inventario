<?php



Route::get('/', 'BienNacionalController@index')->name('inventario_path');

Route::get('inventario/create', 'BienNacionalController@create')->name('inventario_create_path');

Route::post('inventario/store', 'BienNacionalController@store')->name('inventario_store_path');

Route::get('inventario/{bien}', 'BienNacionalController@show')->name('inventario_path');

Route::get('inventario/{bien}/edit', 'BienNacionalController@edit')->name('inventario_edit_path');

Route::delete('inventario/{bien}', 'BienNacionalController@destroy')->name('inventario_delete_path');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

