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

Route::get('/login/admin', function () {
    return view('admin/login');
});
Route::post('/login/proses/admin', 'App\Http\Controllers\SessionController@login');

Route::get('/logout/admin', function () {
    session()->pull('nama');
    session()->pull('attempt');

    return redirect('/login/admin');
});

Route::get('/dashboard/admin', function () {
    return view('admin/dashboard');
});

Route::get('/orangtua/admin', 'App\Http\Controllers\OrangtuaController@show')->name('orangtua');
Route::get('/tambah/orangtua/admin', function () {
    return view('admin.orangtua.tambah');
});
Route::get('/orangtua/{id}/view/admin', 'App\Http\Controllers\OrangtuaController@viewAdmin');
Route::get('/orangtua/{id}/edit/admin', 'App\Http\Controllers\OrangtuaController@editAdmin');
Route::post('/orangtua/{id}/edit/proses/admin', 'App\Http\Controllers\OrangtuaController@editProses')->name('edit.proses.orangtua');
Route::get('/orangtua/{id}/hapus/proses/admin', 'App\Http\Controllers\OrangtuaController@hapusProses');

Route::get('/remaja/admin', 'App\Http\Controllers\RemajaController@show')->name('remaja');
Route::get('/tambah/remaja/admin', function () {
    return view('admin.remaja.tambah');
});
Route::get('/remaja/{id}/view/admin', 'App\Http\Controllers\RemajaController@viewAdmin');
Route::get('/remaja/{id}/edit/admin', 'App\Http\Controllers\RemajaController@editAdmin');
Route::post('/remaja/{id}/edit/proses/admin', 'App\Http\Controllers\RemajaController@editProses')->name('edit.proses.remaja');
Route::get('/remaja/{id}/hapus/proses/admin', 'App\Http\Controllers\RemajaController@hapusProses');

Route::get('/pasangan/admin', 'App\Http\Controllers\PasanganController@show')->name('pasangan');
Route::get('/tambah/pasangan/admin', function () {
    return view('admin.pasangan.tambah');
});
Route::get('/pasangan/{id}/view/admin', 'App\Http\Controllers\PasanganController@viewAdmin');
Route::get('/pasangan/{id}/edit/admin', 'App\Http\Controllers\PasanganController@editAdmin');
Route::post('/pasangan/{id}/edit/proses/admin', 'App\Http\Controllers\PasanganController@editProses')->name('edit.proses.pasangan');
Route::get('/pasangan/{id}/hapus/proses/admin', 'App\Http\Controllers\PasanganController@hapusProses');

Route::get('/produk/admin', 'App\Http\Controllers\ProdukController@show')->name('produk');
Route::get('/tambah/produk/admin', function () {
    return view('admin.produk.tambah');
});
Route::get('/produk/{id}/view/admin', 'App\Http\Controllers\ProdukController@viewAdmin');
Route::get('/produk/{id}/edit/admin', 'App\Http\Controllers\ProdukController@editAdmin');
Route::post('/produk/{id}/edit/proses/admin', 'App\Http\Controllers\ProdukController@editProses')->name('edit.proses.produk');
Route::get('/produk/{id}/hapus/proses/admin', 'App\Http\Controllers\ProdukController@hapusProses');

Route::get('/konsultasi/admin', 'App\Http\Controllers\KonsultasiController@show')->name('konsultasi');
Route::get('/tambah/konsultasi/admin', function () {
    return view('admin.konsultasi.tambah');
});
Route::get('/konsultasi/{id}/view/admin', 'App\Http\Controllers\KonsultasiController@viewAdmin');
Route::get('/konsultasi/{id}/edit/admin', 'App\Http\Controllers\KonsultasiController@editAdmin');
Route::post('/konsultasi/{id}/edit/proses/admin', 'App\Http\Controllers\KonsultasiController@editProses')->name('edit.proses.konsultasi');
Route::get('/konsultasi/{id}/hapus/proses/admin', 'App\Http\Controllers\KonsultasiController@hapusProses');

Route::get('/kelola/admin', 'App\Http\Controllers\KelolaController@show')->name('kelola');
Route::get('/tambah/kelola/admin', function () {
    return view('admin.kelola.tambah');
});
Route::post('/kelola/tambah/proses/admin', 'App\Http\Controllers\KelolaController@tambahProses');
Route::get('/kelola/{id}/hapus/proses/admin', 'App\Http\Controllers\KelolaController@hapusProses');
