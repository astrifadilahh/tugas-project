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

Route::get('kategori', function () {
    return "halaman_kategori";
});

//Route::resource('kategori','KategoriController')->only(['destroy']);
Route::resource('kategori','KategoriController')->except(['destroy']);

