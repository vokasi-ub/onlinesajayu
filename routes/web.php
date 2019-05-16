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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('auth.login');

Route::get('home', function () {
    return view('dashboard.dashboard');
});

/* menampilkan halaman produk */
Route::get('produk', function () {
    return view('dashboard.produk');
});

/* menampilkan halaman detail pesanan */
Route::get('order', function () {
    return view('dashboard.order');
});

Route::get('kategori', function () {
    return view('dashboard.kategori');
});

/* menampilkan halaman kategori */
Route::resource('kategori', 'HomeController');
/* crud kategori */
Route::get('editkategori/{idKategory}','HomeController@edit');
Route::post('updatekategori/{idKategory}','HomeController@update');
Route::post('tambahkategori','HomeController@store');
Route::get('tambahdata','HomeController@create');
Route::get('hapuskategori/{idKategory}','HomeController@destroy');


/* menampilkan halaman produk */
Route::resource('produk', 'produkController');
/* crud subkategori */
Route::get('editproduk/{idProduk}','produkController@edit');
Route::post('updateproduk/{idProduk}','produkController@update');
Route::post('tambahproduk','produkController@store');
Route::get('tambahdataproduk','produkController@create');
Route::get('hapusproduk/{idProduk}','produkController@destroy');

/* menampilkan halaman produk */
Route::resource('order', 'orderController');
/* crud subkategori */
Route::get('editorder/{idOrder}','orderController@edit');
Route::post('updateorder/{idOrder}','orderController@update');
Route::post('tambahorder','orderController@store');
Route::get('tambahdataorder','orderController@create');
Route::get('hapusorder/{idOrder}','orderController@destroy');

Route::get('table', function () {
    return view('layouts.table');
});



