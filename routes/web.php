<?php

use App\Http\Controllers\dashboard_kontak;
use App\Http\Controllers\Frontend\FrontendController as FrontendFrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\Frontend\KeranjangController;
use App\Http\Controllers\Frontend\KoleksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [FrontendFrontendController::class, 'index'])->name('index');
Route::get('/koleksi', [KoleksiController::class, 'koleksi'])->name('index.koleksi');
Route::get('/koleksi/{ayam}/', [KoleksiController::class, 'show'])->name('index.koleksi.show');

Route::get('/showBerita/{id}/showBerita', [frontendController::class, 'showBerita']);
Route::get('/informasi', [frontendController::class, 'berita']);
Route::get('/keranjang', [frontendController::class, 'showKeranjang']);
Route::post('/keranjang', [KeranjangController::class, 'store']);
Route::get('/tampil/{id}', [frontendController::class, 'tampil']);
Route::get('/kontak', [frontendController::class, 'kontak']);
Route::get('/exportlaporan', [frontendController::class, 'exportlaporan'])->name('exportlaporan');


Route::group(['middleware' => ['auth']], function () {

    Route::get('add_to_cart', [MyAccountController::class, 'add_to_cart'])->name('/add_to_cart');
    Route::get('add_to_cart/{x}', [MyAccountController::class, 'add_to_cart'])->name('/add_to_cart');
    Route::get('cart', [MyAccountController::class, 'cart'])->name('/cart');
    Route::get('/cart/{id}', [frontendController::class, 'cart']);

    Route::delete('/remove_from_cart', [frontendController::class, 'remove'])->name('remove_from_cart');
    Route::patch('update_cart', [frontendController::class, 'update'])->name('update_cart');
    Route::patch('update-cart', [frontendController::class, 'update'])->name('update_cart');
    Route::get('add_to_cart/{id}', [frontendController::class, 'add_to_cart'])->name('add_to_cart');

    Route::get('/dashboard', [dashboard_kontak::class, 'index']);


    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Route::group(['middleware' => ['isAdmin']], function () {
    //     Route::resource('images', fotoController::class);
    //     Route::resource('jenis_ayam', Jenis_ayam_controller::class);
    //     Route::resource('nama_ayam', Nama_ayam_Controller::class);
    //     Route::resource('cover', gambarController::class);
    //     Route::resource('ayam', ayamController::class);
    //     Route::resource('pelanggan', pelangganController::class);
    //     Route::resource('client', clientController::class);
    //     Route::resource('trans', transaksiController::class);
    //     Route::resource('info', beritaController::class);
    //     Route::resource('kontak', dashboard_kontak::class);
    //     Route::resource('kategori', kategoriController::class);
    // });
});
