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

Route::get('/produk', function () {
    return view('produk');
});

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

Route::get('/orangtua', 'App\Http\Controllers\OrangtuaController@index');
Route::post('/orangtua_cari', 'App\Http\Controllers\OrangtuaController@cari');
Route::get('/orangtua/{id}/view', 'App\Http\Controllers\OrangtuaController@view');

Route::get('/remaja', 'App\Http\Controllers\RemajaController@index');
Route::post('/remaja_cari', 'App\Http\Controllers\RemajaController@cari');
Route::get('/remaja/{id}/view', 'App\Http\Controllers\RemajaController@view');

Route::get('/pasangan', 'App\Http\Controllers\PasanganController@index');
Route::post('/pasangan_cari', 'App\Http\Controllers\PasanganController@cari');
Route::get('/pasangan/{id}/view', 'App\Http\Controllers\PasanganController@view');
