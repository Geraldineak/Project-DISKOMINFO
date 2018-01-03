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

Route::resource('kontak','Kontak');
Route::resource('departemen','Departemen');
Route::resource('laporan','Laporan');

Route::get('/', function () {
    return view('index');
});

Route::get('/kontak_create', function (){
    return view('kontak_create');
});
Route::get('/laporan-kerja-kabid', function (){
    return view('laporan_kerja_kabid');
});
Route::get('/laporan-kerja-kasi', function (){
    return view('laporan_kerja_kasi');
});
Route::get('index-outsource', function (){
    return view('index_outsource');
});
Route::get('halaman-login', function (){
    return view('login');
});
Route::post('login', 'LoginController@login');

Route::get('lihat-laporan', function (){
    return view('lihat_laporan');
});
Route::get('kirim-laporan', function (){
    return view('kirim_laporan_outsource');
});
Route::get('laporan-kerja', function (){
    return view('laporan_kerja');
});

