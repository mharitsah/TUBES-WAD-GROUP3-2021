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
Route::get('/login', [App\Http\Controllers\formController::class, 'login']);
Route::get('/register', [App\Http\Controllers\formController::class, 'register']);


#Controller untuk home
Route::get('/aboutus', [App\Http\Controllers\homeController::class, 'aboutus']);
Route::get('/product', [App\Http\Controllers\homeController::class, 'product']);
Route::get('/checkout', [App\Http\Controllers\homeController::class, 'checkout']);
Route::get('/order', [App\Http\Controllers\homeController::class, 'order']);
Route::get('/status', [App\Http\Controllers\homeController::class, 'status']);