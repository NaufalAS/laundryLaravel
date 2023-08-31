<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin');
});
   
//data pembeli
Route::get('data_pembeli', 'App\Http\Controllers\DataPembeliController@index')->name('data_pembeli.index');
Route::get('data_pembeli/create', 'App\Http\Controllers\DataPembeliController@create')->name('data_pembeli.create');
Route::get('data_pembeli/store', 'App\Http\Controllers\DataPembeliController@store')->name('data_pembeli.store');

Route::get('data_pembeli/edit/{id}','App\Http\Controllers\DataPembeliController@edit')->name('data_pembeli.edit');
Route::post('data_pembeli/update/{id}','App\Http\Controllers\DataPembeliController@update')->name('data_pembeli.update');

Route::post('data_pembeli/delete/{id}','App\Http\Controllers\DataPembeliController@destroy')->name('data_pembeli.destroy');
Route::get('data_pembeli/search','App\Http\Controllers\DataPembeliController@search')->name('data_pembelisearch');

// transaksi
Route::get('transaksi', 'App\Http\Controllers\TransaksiController@index')->name('transaksi.index');

//riwayat
Route::get('riwayat', 'App\Http\Controllers\RiwayatController@index')->name('riwayat.index');
Route::get('riwayat/store', 'App\Http\Controllers\RiwayatController@store')->name('riwayat.store');

Route::get('riwayat/edit/{id}','App\Http\Controllers\RiwayatController@edit')->name('riwayat.edit');
Route::get('riwayat/edit/{id}','App\Http\Controllers\RiwayatController@edit')->name('riwayat.edit');
Route::post('riwayat/update/{id}','App\Http\Controllers\RiwayatController@update')->name('riwayat.update');
Route::get('riwayat/riwayat_pdf','App\Http\Controllers\RiwayatController@riwayat_pdf')->name('riwayat.riwayat_pdf');


Route::get('riwayat/riwayat_pdftransaksi/{id}', 'App\Http\Controllers\RiwayatController@riwayat_transaksi')->name('riwayat.riwayat_pdf_transaksi');


//jenis laundry
Route::get('jenis_laundry', 'App\Http\Controllers\JenisLaundryController@index')->name('jenis_laundry.index');
Route::get('jenis_laundry/create', 'App\Http\Controllers\JenisLaundryController@create')->name('jenis_laundry.create');
Route::get('jenis_laundry/store', 'App\Http\Controllers\JenisLaundryController@store')->name('jenis_laundry.store');

Route::get('jenis_laundry/edit/{id}','App\Http\Controllers\JenisLaundryController@edit')->name('jenis_laundry.edit');
Route::post('jenis_laundry/update/{id}','App\Http\Controllers\JenisLaundryController@update')->name('jenis_laundry.update');
Route::post('jenis_laundry/delete/{id}','App\Http\Controllers\JenisLaundryController@destroy')->name('jenis_laundry.destroy');






