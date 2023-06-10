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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\BoothController::class, 'index'])->name('home');

Route::get('/lihatkeranjang',[\App\Http\Controllers\KeranjangController::class,'index'])->name('lihatkeranjang');

Route::post('/keranjang',[\App\Http\Controllers\KeranjangController::class,'store'])->name('keranjang.store');

Route::delete('keranjang/{keranjang}', [\App\Http\Controllers\KeranjangController::class, 'destroy'])->name('keranjang.destroy');

Route::post('/payment/{id}', [\App\Http\Controllers\KeranjangController::class, 'update'])->name('keranjang.update');

