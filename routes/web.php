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

Route::get('/', 'BerandaController@beranda');

Route::get('/beranda', 'BerandaController@beranda');
Route::get('/reserve', 'ReservasiController@index');
//Services routes
Route::post('/services/details', 'ServiceController@getServicesDetails')->name('service.details');
Route::get('/services', 'ServiceController@services');
//User routes
Auth::routes();
Route::get('/home','HomeController@index');

//Admin routes
Route::get('admin','AdminController@index')->name('admin.dashboard');
Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('admin/createlayanan','AdminCreateController@layanan')->name('admin.create.layanan');
Route::post('admin/createlayanan','AdminCreateController@createLayanan')->name('admin.create.layanan.submit');
Route::get('admin/createpaket','AdminCreateController@paket')->name('admin.create.paket');
Route::post('admin/createpaket','AdminCreateController@createPaket')->name('admin.create.paket.submit');
Route::get('admin/createpegawai','AdminCreateController@pegawai')->name('admin.create.pegawai');
Route::post('admin/createpegawai','AdminCreateController@createPegawai')->name('admin.create.pegawai.submit');
Route::get('admin/createcabang','AdminCreateController@cabang')->name('admin.create.cabang');
Route::post('admin/createcabang','AdminCreateController@createcabang')->name('admin.create.cabang.submit');
Route::get('admin/createPaketLayanan','AdminCreateController@paketLayanan')->name('admin.create.paketLayanan');
Route::post('admin/createPaketLayanan','AdminCreateController@createPaketLayanan')->name('admin.create.paketLayanan.submit');

//Admin Create Reserve
Route::get('admin/createreservasi','AdminCreateController@reservasi')->name('admin.create.reservasi');
Route::post('admin/createreservasi','AdminCreateController@createReservasi')->name('admin.create.reservasi.submit');
Route::get('findPegawaiAdmin', 'AdminCreateController@findPegawaiAdmin');
Route::get('findLayananAdmin', 'AdminCreateController@findLayananAdmin');
Route::get('findPaketAdmin', 'AdminCreateController@findPaketAdmin');
Route::get('findLayananKategoriAdmin', 'AdminCreateController@findLayananKategoriAdmin');
Route::get('findTimeAdmin','AdminCreateController@findTimeAdmin');
//Reservasi
Route::post('/reserve', 'ReservasiController@postReserve')->name('create.reserve');
Route::get('findPegawai', 'ReservasiController@findPegawai');
Route::get('findLayanan', 'ReservasiController@findLayanan');
Route::get('findPaket', 'ReservasiController@findPaket');
Route::get('findLayananKategori', 'ReservasiController@findLayananKategori');
Route::get('findTime','ReservasiController@findTime');
//prices
Route::get('/prices', 'PricesController@prices');
//Pembayaran
Route::get('/admin/bayarOffline', 'BayarController@bayarOffline')->name('bayar.offline');
Route::post('/admin/bayarOffline','BayarController@ubahStatus')->name('ubahStatus');
Route::get('/admin/bayarOnline', 'BayarController@bayarOnline')->name('bayar.online');
Route::post('/admin/bayarOnline','BayarController@ubahStatusOnline')->name('ubahStatusOnline');
