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
    return view('aboutus');
});

#Controller untuk form
Route::get('/login', [App\Http\Controllers\formController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\formController::class, 'loginAuth']);
Route::get('/register', [App\Http\Controllers\formController::class, 'register'])->middleware('guest');
Route::post('/register', [App\Http\Controllers\formController::class, 'daftar']);

#Controller untuk home
Route::get('/home', [App\Http\Controllers\homeController::class, 'home']);
Route::get('/aboutus', [App\Http\Controllers\homeController::class, 'aboutus'])->middleware('guest');
Route::post('/cari', [App\Http\Controllers\homeController::class, 'cari']);
Route::post('/logout', [App\Http\Controllers\homeController::class, 'logout']);
Route::get('/testing/{id}', [App\Http\Controllers\homeController::class, 'testing']);

#Controller untuk product
Route::get('/product', [App\Http\Controllers\productController::class, 'index'])->middleware('auth');
Route::post('/buy', [App\Http\Controllers\productController::class, 'chart'])->middleware('auth');
Route::get('/checkout/{id}', [App\Http\Controllers\productController::class, 'chartindex'])->middleware('auth');
Route::post('/order/{id}', [App\Http\Controllers\productController::class, 'belanja'])->middleware('auth');
Route::get('/order/{id}', [App\Http\Controllers\productController::class, 'orderindex']);
Route::get('/deletechart/{id}', [App\Http\Controllers\productController::class, 'deletechart']);
Route::get('/backchart/{id}', [App\Http\Controllers\productController::class, 'backchart']);
Route::get('/alamat/{id}', [App\Http\Controllers\productController::class, 'alamat']);
Route::post('/alamat/{id}', [App\Http\Controllers\productController::class, 'isialamat']);
Route::get('/konfirmasi/{id}', [App\Http\Controllers\productController::class, 'konfirmasi']);
Route::get('/pembayaran/{id}', [App\Http\Controllers\productController::class, 'pembayaran'])->middleware('auth');
Route::post('/pembayaran/{id}', [App\Http\Controllers\productController::class, 'prosesbayar'])->middleware('auth');
