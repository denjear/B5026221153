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
