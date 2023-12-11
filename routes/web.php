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

Route::get('/', function () {
    return view('landingpage');
});
Route::get('Minggu1', function () {
    return view('w1');
});
Route::get('Minggu2', function () {
    return view('w2');
});
Route::get('Minggu3', function () {
    return view('w3');
});
Route::get('Minggu4', function () {
    return view('w4');
});
Route::get('Minggu5', function () {
    return view('w5');
});
Route::get('Minggu6', function () {
    return view('w6');
});
Route::get('Minggu7', function () {
    return view('w7');
});
Route::get('Minggu10', function () {
    return view('welcome');
});
Route::get('Tutorial', function () {
    return view('blog');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

//Route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//Route CRUD Latihan Soal
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//Route CRUD Latihan Soal Keranjang
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index2');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{ID}','App\Http\Controllers\KeranjangController@batal');

//Route CRUD Tugas PraEAS
Route::get('/dvd','App\Http\Controllers\DVDController@index');
Route::get('/dvd/tambah','App\Http\Controllers\DVDController@tambah');
Route::post('/dvd/store','App\Http\Controllers\DVDController@store');
Route::get('/dvd/edit/{kodedvd}','App\Http\Controllers\DVDController@edit');
Route::post('/dvd/update','App\Http\Controllers\DVDController@update');
Route::get('/dvd/view/{kodedvd}','App\Http\Controllers\DVDController@view');
Route::get('/dvd/hapus/{kodedvd}','App\Http\Controllers\DVDController@hapus');
Route::get('/dvd/cari','App\Http\Controllers\DVDController@cari');

//Route CRUD EAS
Route::get('/kategori','App\Http\Controllers\EASController@index');
Route::get('/kategori/view/{ID}','App\Http\Controllers\EASController@view');
