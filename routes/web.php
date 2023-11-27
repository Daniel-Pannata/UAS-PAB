<?php

use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\SuppliersController;
use App\Http\Controllers\KontrakBeliController;
use App\Http\Controllers\KontrakJualController;

use App\Http\Controllers\MuatBongkarController;
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
});


Route::resource('/admin/customers', CustomersController::class);

// Route::controller(CustomerController::class)->group(function () {
//     Route::get('/customer', 'index');
//     Route::post('/customer/add','store');
// });

// Route::controller(PksController::class)->group(function () {
//     Route::get('/pks', 'index');
//     Route::post('/pks/add','store');

// });
Route::resource('/admin/suppliers', SuppliersController::class);


Route::controller(KontrakBeliController::class)->group(function () {
    Route::get('/kontrakbeli', 'index');
});

Route::controller(KontrakJualController::class)->group(function () {
    Route::get('/kontrakjual', 'index');
});

Route::controller(MuatBongkarController::class)->group(function () {
    Route::get('/muatbongkar', 'index');
});


