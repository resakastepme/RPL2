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

Route::get('/orangtua', function () {
    return view('info_orangtua');
});

Route::get('/remaja', function () {
    return view('info_remaja');
});

Route::get('/anak', function () {
    return view('info_anak');
});

Route::get('/pasangan', function () {
    return view('info_pasangan');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

// Controller Route

Route::get('/test', [StudentController::class, 'index']);
