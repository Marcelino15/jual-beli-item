<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@detail');
Route::get('/keranjang/{id}', 'HomeController@tambahKeranjang');
Route::get('/keranjang-hapus/{id}', 'HomeController@hapusBarang');
Route::get('/tambah-kuantitas/{id}', 'HomeController@tambahQty');
Route::get('/kurangi-kuantitas/{id}', 'HomeController@kurangiQty');

Route::get('/keranjang-update/{id}', 'HomeController@updateBarang');
Route::get('/tampil-keranjang/', 'HomeController@viewCart');


Route::get('/admin', 'AdminController@index')
        ->name('admin');
Route::get('/admin/penjual','AdminController@index_penjual')->name('list-penjual');
Route::get('admin/penjual_tambah','AdminController@create_penjual')->name('penjual-create');
Route::post('admin/penjual_store','AdminController@store_penjual')->name('penjual-store');
Route::get('admin/penjual_edit/{id}','AdminController@edit_penjual')->name('penjual-edit');
Route::put('admin/penjual_update/{id}','AdminController@update_penjual')->name('penjual-update');
Route::delete('admin/penjual_delete/{id}','AdminController@destroy_penjual')->name('delete-penjual');

Route::get('/penjual','PenjualController@index')->name('penjual');
Route::get('/penjual/barang_list','PenjualController@index_barang')->name('barang-list');
Route::get('/penjual/barang_create','PenjualController@create_barang')->name('barang-create');
Route::post('/penjual/barang_store','PenjualController@store_barang')->name('barang-store');
Route::get('/penjual/barang_edit/{id}','PenjualController@edit_barang')->name('barang-edit');
Route::put('/penjual/penjual_update/{id}','PenjualController@update_barang')->name('barang-update');
Route::delete('/penjual/barang_destroy/{id}','PenjualController@destroy_barang')->name('barang-destroy');
Route::put('/penjual/barang-update-foto/{id}','PenjualController@update_foto_barang')->name('barang-update-foto');

Route::get('/pembeli','PembeliController@index')->name('pembeli');