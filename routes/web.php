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

Route::get('/', 'DatasController@index') -> name('datas.index');

Route::get('add', 'DatasController@add' )->name('datas.adding');

Route::post('create', 'DatasController@create')->name('datas.store');

Route::get('datas/{id}/edit', 'DatasController@edit')->name('datas.edit');

Route::put('datas/{id}/edit', 'DatasController@update')->name('datas.update');

Route::delete('datas/{id}', 'DatasController@destroy')->name('datas.destroy');

