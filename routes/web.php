<?php

use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\SuppliersController;
use App\Http\Controllers\KontrakBeliController;
use App\Http\Controllers\KontrakJualController;

use App\Http\Controllers\LaporanLabaController;
use App\Http\Controllers\LaporanOngkosController;
use App\Http\Controllers\LaporanPembelianController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\MuatBongkarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->middleware('auth');


Route::resource('/admin/customers', CustomersController::class)->middleware('auth');

// Route::controller(CustomerController::class)->group(function () {
//     Route::get('/customer', 'index');
//     Route::post('/customer/add','store');
// });

// Route::controller(PksController::class)->group(function () {
//     Route::get('/pks', 'index');
//     Route::post('/pks/add','store');

// });
Route::resource('/admin/suppliers', SuppliersController::class)->middleware('auth');


Route::controller(KontrakBeliController::class)->group(function () {
    Route::get('/kontrakbeli', 'index')->middleware('auth');
    Route::get('/kontrakbeli/create','create')->name('kontrakbeli.create')->middleware('auth');
    Route::post('/kontrakbeli/store','store')->name('kontrakbeli.store')->middleware('auth');
    Route::get('/kontrakbeli/show/{id}','show')->name('kontrakbeli.show')->middleware('auth');
    Route::get('/kontrakbeli/edit/{id}','edit')->name('kontrakbeli.edit')->middleware('auth');
    Route::post('/kontrakbeli/update/{id}','update')->name('kontrakbeli.update')->middleware('auth');
    Route::get('/kontrakbeli/delete/{id}', 'destroy')->name('kontrakbeli.delete')->middleware('auth');
});

Route::controller(KontrakJualController::class)->group(function () {
    Route::get('/kontrakjual', 'index')->middleware('auth');
    Route::get('/kontrakjual/create','create')->name('kontrakjual.create')->middleware('auth');
    Route::post('/kontrakjual/store','store')->name('kontrakjual.store')->middleware('auth');
    Route::get('/kontrakjual/show/{id}','show')->name('kontrakjual.show')->middleware('auth');
    Route::get('/kontrakjual/edit/{id}','edit')->name('kontrakjual.edit')->middleware('auth');
    Route::post('/kontrakjual/update/{id}','update')->name('kontrakjual.update')->middleware('auth');
    Route::get('/kontrakjual/delete/{id}', 'destroy')->name('kontrakjual.delete')->middleware('auth');
});


Route::controller(UserController::class)->group(function () {
    Route::get('/admin/users', 'index')->name('users.index')->middleware('auth');
    Route::get('/admin/users/create','create')->name('users.create')->middleware('auth');
    Route::post('/admin/users/store','store')->name('users.store')->middleware('auth');
    Route::get('/admin/users/show/{id}','show')->name('users.show')->middleware('auth');
    Route::get('/admin/users/edit/{id}','edit')->name('users.edit')->middleware('auth');
    Route::post('/admin/users/update/{id}','update')->name('users.update')->middleware('auth');
    Route::get('/admin/users/delete/{id}', 'destroy')->name('users.delete')->middleware('auth');
});

Route::controller(MuatBongkarController::class)->group(function () {
    Route::get('/muatbongkar', 'index')->middleware('auth');
    Route::get('/muatbongkar/create','create')->name('muatbongkar.create')->middleware('auth');
    Route::post('/muatbongkar/store','store')->name('muatbongkar.store')->middleware('auth');
    Route::get('/muatbongkar/show/{id}','show')->name('muatbongkar.show')->middleware('auth');
    Route::get('/muatbongkar/edit/{id}','edit')->name('muatbongkar.edit')->middleware('auth');
    Route::post('/muatbongkar/update/{id}','update')->name('muatbongkar.update')->middleware('auth');
    Route::get('/muatbongkar/delete/{id}', 'destroy')->name('muatbongkar.delete')->middleware('auth');
});

Route::controller(LaporanLabaController::class)->group(function () {
    Route::get('/laporan/laba', 'index')->middleware('auth');
    Route::get('/laporan/laba/cetak','cetak')->name('laporanpdf.laba')->middleware('auth');
    Route::get('/laporan/laba/cetakpdf','cetakpdf')->name('laporanpdfcetak.laba')->middleware('auth');
});

Route::controller(LaporanOngkosController::class)->group(function () {
    Route::get('/laporan/ongkos', 'index')->middleware('auth');
    Route::get('/laporan/ongkos/cetak','cetak')->name('laporanpdf.ongkos')->middleware('auth');
    Route::get('/laporan/ongkos/cetakpdf','cetakpdf')->name('laporanpdfcetak.ongkos')->middleware('auth');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


