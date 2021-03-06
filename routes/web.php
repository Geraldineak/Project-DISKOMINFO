<?php

use App\ModelKontak;
use Illuminate\Support\Facades\Input;

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

//search
Route::any ( '/search', function () {
    $q = Input::get('q');
    $users = ModelKontak::where ( 'nama_lengkap', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $users ) > 0)
        return view ( 'kontak_cari' )->withDetails ($users)->withQuery($q);
    else
        return view ( 'kontak_cari' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('kontak','Kontak');
Route::resource('departemen','Departemen');
Route::resource('laporan','Laporan');

Route::get('/', function () {
    return view('login');
});



// Route::get('/kontak_create', function (){
//     return view('kontak_create');
// });

//laporan
Route::get('/laporan-kerja-kabid', function (){
    return view('laporan_kerja_kabid');
});
Route::get('/laporan-kerja-kasi', function (){
    return view('laporan_kerja_kasi');
});
Route::get('/laporan-kerja', 'Laporan@index_ka');
Route::get('/laporan-outsource', 'Laporan@index_outsource')->name("laporan.outsource");


//kontak
Route::get('/kontak-cari', 'Kontak@search');


Route::get('index-outsource', function (){
    return view('index_outsource');
});
// Route::get('halaman-login', function (){
//     return view('login');
// });
Route::post('login', 'LoginController@login');

// Route::get('lihat-laporan', function (){
//     return view('lihat_laporan');
// });
// Route::get('kirim-laporan', function (){
//     return view('kirim_laporan_outsource');
// });
// Route::get('laporan-kerja', function (){
//     return view('laporan_kerja');
// });

Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');

// Route::get('/test', function (){
//     $departemens = DB::table('departemen')->pluck('nama_departemen','id');
//     return view('kontak_create')-> with(['departemens' => $departemens]);
// });

Route::get('/index', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/logout', 'User@logout');