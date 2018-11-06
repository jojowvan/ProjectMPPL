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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/loginDua', function () {
    return view('Auth/loginDua');
});

Route::get('/HomeUser', 'UserController@homeUser')->name('home.user');

Route::group(['prefix'=>'Keuangan'], function(){
  Route::get('/DaftarSiswa', 'staffKeuanganController@daftarSiswa')->name('daftar.siswa');
  Route::get('/TambahSiswa', 'staffKeuanganController@tambahSiswa')->name('tambah.siswa');
});

Route::group(['prefix'=>'SaranaPrasarana'], function(){
  Route::get('/DaftarSarana', 'staffSaranaController@daftarSarana')->name('daftar.sarana');
  Route::get('/AnggaranSarana', 'staffSaranaController@anggaranSarana')->name('anggaran.sarana');
  Route::get('/TambahSarana', 'staffSaranaController@tambahSarana')->name('tambah.sarana');
});
