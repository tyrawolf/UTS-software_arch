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
Route::get('/kontak','controllerKontak@index')->name('kontakIndex');
Route::get('/kontak/new','controllerKontak@new_form')->name('kontakNewForm');
Route::post('/kontak','controllerKontak@add')->name('kontakCreate');
Route::get('/kontak/{id}/delete','controllerKontak@delete')->name('kontakDelete');
Route::get('/kontak/edit/{id}','controllerKontak@edit')->name('kontakEditForm');
Route::post('/kontak/edit/{id}','controllerKontak@update')->name('kontakUpdate');
Route::get('/kontak/{id}/detail','controllerKontak@detail')->name('kontakDetail');
Route::get('/kontak/search','controllerKontak@search')->name('kontakSearch');