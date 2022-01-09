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
#form admin
Route::get('/register/admin', [App\Http\Controllers\formController::class, 'registeradmin'])->middleware('guest');
Route::get('/login/admin', [App\Http\Controllers\formController::class, 'loginadmin'])->middleware('guest');
Route::post('/registeradmin', [App\Http\Controllers\formController::class, 'daftaradmin']);
Route::post('/loginadmin', [App\Http\Controllers\formController::class, 'loginAuthadmin']);

#Controller untuk home
Route::get('/home', [App\Http\Controllers\homeController::class, 'home']);
Route::get('/aboutus', [App\Http\Controllers\homeController::class, 'aboutus'])->middleware('guest');
Route::get('/gallery', [App\Http\Controllers\homeController::class, 'gallery']);
Route::post('/cari', [App\Http\Controllers\homeController::class, 'cari']);
Route::post('/logout', [App\Http\Controllers\homeController::class, 'logout']);
Route::get('/testing/{id}', [App\Http\Controllers\homeController::class, 'testing']);
Route::get('/contactus', [App\Http\Controllers\homeController::class, 'contactus']);

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
Route::get('/riwayat/{id}', [App\Http\Controllers\productController::class, 'riwayat'])->middleware('auth');
Route::get('/harga', [App\Http\Controllers\productController::class, 'harga']);
Route::get('/baru', [App\Http\Controllers\productController::class, 'baru']);
Route::get('/lama', [App\Http\Controllers\productController::class, 'lama']);
Route::get('/hargarendah', [App\Http\Controllers\productController::class, 'hargarendah']);
Route::get('/nama', [App\Http\Controllers\productController::class, 'nama']);



#Controller admin
Route::get('/admin/product', [App\Http\Controllers\adminController::class, 'adminproduct'])->middleware('auth:webadmin');
Route::get('/admin/tambah', [App\Http\Controllers\adminController::class, 'adminadd'])->middleware('auth:webadmin');
Route::post('/admin/addproduct', [App\Http\Controllers\adminController::class, 'addproduct']);
Route::get('/admin/edit/{id}', [App\Http\Controllers\adminController::class, 'adminedit'])->middleware('auth:webadmin');
Route::post('/admin/editproduct/{id}', [App\Http\Controllers\adminController::class, 'editproduct']);
Route::get('/admin/hapus/{id}', [App\Http\Controllers\adminController::class, 'hapusproduct']);
Route::get('/admin/pesanan', [App\Http\Controllers\adminController::class, 'adminpesanan'])->middleware('auth:webadmin');
Route::post('/admin/pesanan/terima/{id}', [App\Http\Controllers\adminController::class, 'terimapesanan']);
Route::post('/admin/pesanan/batal/{id}', [App\Http\Controllers\adminController::class, 'tolakpesanan']);
Route::get('/admin/bukti/{id}/{id2}', [App\Http\Controllers\adminController::class, 'bukticustomer'])->middleware('auth:webadmin');

#Controller guest
Route::get('/product', [App\Http\Controllers\productController::class, 'index'])->middleware('auth');
Route::post('/buy', [App\Http\Controllers\productController::class, 'chart'])->middleware('auth');
Route::get('/checkout', [App\Http\Controllers\productController::class, 'chartindex'])->middleware('auth');
Route::post('/order', [App\Http\Controllers\productController::class, 'belanja'])->middleware('auth');
Route::get('/order', [App\Http\Controllers\productController::class, 'orderindex'])->middleware('auth');
Route::get('/deletechart', [App\Http\Controllers\productController::class, 'deletechart']);
Route::get('/backchart', [App\Http\Controllers\productController::class, 'backchart']);
Route::get('/alamat', [App\Http\Controllers\productController::class, 'alamat'])->middleware('auth');
Route::post('/alamat', [App\Http\Controllers\productController::class, 'isialamat']);
Route::get('/konfirmasi', [App\Http\Controllers\productController::class, 'konfirmasi'])->middleware('auth');
Route::get('/pembayaran', [App\Http\Controllers\productController::class, 'pembayaran'])->middleware('auth');
Route::post('/pembayaran', [App\Http\Controllers\productController::class, 'prosesbayar'])->middleware('auth');