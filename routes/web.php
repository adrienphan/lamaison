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

Auth::routes();

Route::resource('admin', 'MaisonController')->middleware('auth');

Route::get('/', 'MaisonController@index')->name('accueil');
Route::get('show/{id}','MaisonController@show')->name('produit');
