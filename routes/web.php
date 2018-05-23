<?php



Route::group(['middleware' => 'auth'],function(){

		Route::get('/', 'BienNacionalController@index')
		     ->name('inventario_path');

		Route::get('inventario/create', 'BienNacionalController@create')
			   ->name('inventario_create_path');

		Route::post('inventario/store', 'BienNacionalController@store')
			   ->name('inventario_store_path');

		Route::put('inventario/{bien}/update', 'BienNacionalController@update')
			   ->name('inventario_update_path');

		Route::get('inventario/{bien}/edit', 'BienNacionalController@edit')
		     ->name('inventario_edit_path');

		Route::get('inventario/{bien}', 'BienNacionalController@show')
		     ->name('inventario_show_path');


		Route::delete('inventario/{bien}', 'BienNacionalController@destroy')
		     ->name('inventario_delete_path');

		 Route::get('inventario/{bien}/pdf', 'BienNacionalController@pdf')->name('inventario_pdf_path');

});



Auth::routes();
Route::get('inventario/new/vista', 'BienNacionalController@vistaPrevia');
Route::get('inventario/{bien}/pdf', 'BienNacionalController@pdf')->name('inventario_pdf_path');
//Route::get('/home', 'HomeController@index')->name('home');

