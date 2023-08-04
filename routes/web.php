<?php

use Illuminate\Support\Facades\Route;

Route::get('/productos', 'ProductoController@index')->name('productos.index');
Route::get('/productos/create', 'ProductoController@create')->name('productos.create');
Route::post('/productos', 'ProductoController@store')->name('productos.store');
Route::get('/productos/{producto}', 'ProductoController@show')->name('productos.show');
Route::get('/productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit');
Route::put('/productos/{producto}', 'ProductoController@update')->name('productos.update');
Route::delete('/productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');
Route::post('/productos', 'ProductoController@store')->name('productos.store');




Route::get('/', function () {
    return view('welcome');
});
