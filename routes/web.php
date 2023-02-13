<?php

use App\Http\Controllers\OrangtuaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('/orangtua', function () {
//     return view('info_orangtua');
// });

// Route::get('/remaja', function () {
//     return view('info_remaja');
// });

// Route::get('/pasangan', function () {
//     return view('info_pasangan');
// });

// Route::get('/produk', function () {
//     return view('produk');
// });

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('/input', function () {
    return view('input');
});

// Controller Route

Route::post('/uporangtua', 'App\Http\Controllers\UpOrangtuaController@upload');
Route::post('/upremaja', 'App\Http\Controllers\UpRemajaController@upload');
Route::post('/uppasangan', 'App\Http\Controllers\UpPasanganController@upload');
Route::post('/upproduk', 'App\Http\Controllers\UpProdukController@upload');
Route::post('/upkonsultasi', 'App\Http\Controllers\UpKonsultasiController@upload');

Route::get('/orangtua', 'App\Http\Controllers\OrangtuaController@index');
Route::post('/orangtua_cari', 'App\Http\Controllers\OrangtuaController@cari');
Route::get('/orangtua/{id}/view', 'App\Http\Controllers\OrangtuaController@view');

Route::get('/remaja', 'App\Http\Controllers\RemajaController@index');
Route::post('/remaja_cari', 'App\Http\Controllers\RemajaController@cari');
Route::get('/remaja/{id}/view', 'App\Http\Controllers\RemajaController@view');

Route::get('/pasangan', 'App\Http\Controllers\PasanganController@index');
Route::post('/pasangan_cari', 'App\Http\Controllers\PasanganController@cari');
Route::get('/pasangan/{id}/view', 'App\Http\Controllers\PasanganController@view');

Route::get('/produk', 'App\Http\Controllers\ProdukController@index');
Route::post('/produk_cari', 'App\Http\Controllers\ProdukController@cari');
Route::get('/produk/{id}/view', 'App\Http\Controllers\ProdukController@view');

Route::get('/konsultasi', 'App\Http\Controllers\konsultasiController@index');
Route::post('/konsultasi_cari', 'App\Http\Controllers\konsultasiController@cari');
Route::get('/konsultasi/{id}/view', 'App\Http\Controllers\konsultasiController@view');

// ADMIN ----------------------------------------------------------------------------------

// Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/show-orangtua', 'App\Http\Controllers\OrangtuaController@show');
Route::get('/modaltambah-orangtua', 'App\Http\Controllers\OrangtuaController@modaltambah');
Route::post('/tambah-orangtua', 'App\Http\Controllers\OrangtuaController@tambah')->name('tambah-orangtua');
Route::post('/tambah-orangtua', [OrangtuaController::class, 'tambah'])->name('tambah-orangtua');
