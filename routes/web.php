<?php

use App\Http\Controllers\ayamController;
use App\Http\Controllers\dashboard_kontak;
use App\Http\Controllers\fotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\cariController;
use App\Http\Controllers\gambarController;
use App\Http\Controllers\Jenis_ayam_controller;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\Nama_ayam_Controller;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\tesController;
use App\Http\Controllers\TransaksiController;
use App\Models\jenis_ayam;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('images', fotoController::class);
    Route::get('/images', [fotoController::class, 'index']);
    Route::get('/images/{id}/edit', [fotoController::class, 'edit']);
    Route::get('/images/delete/{id}', [fotoController::class, 'delete'])->name('delete');
    Route::put('/images/{id}', [fotoController::class, 'update']);

    Route::resource('jenis_ayam', Jenis_ayam_controller::class);
    Route::get('/jenis_ayam', [Jenis_ayam_controller::class, 'index']);


    Route::resource('nama_ayam', Nama_ayam_Controller::class);
    Route::get('/nama_ayam', [nama_ayam_controller::class, 'index']);

    Route::resource('gambar', gambarController::class);
    Route::get('/gambar', [gambarController::class, 'index']);
    Route::post('/post', [gambarController::class, 'store']);
    Route::put('/update/{id}', [gambarController::class, 'update']);
    Route::get('/edit/{id}', [gambarController::class, 'edit']);
    Route::get('/gambar/{id}/show', [gambarController::class, 'show'])->where('id', '[0-9]+');

    Route::delete('/deleteimage/{id}', [gambarController::class, 'deleteimage']);
    Route::delete('/deletecover/{id}', [gambarController::class, 'deletecover']);

    Route::resource('ayam', ayamController::class);
    Route::get('/ayam', [ayamController::class, 'index']);
    Route::post('/post', [ayamController::class, 'store']);
    Route::put('/update/{id}', [ayamController::class, 'update']);
    Route::get('/edit/{id}', [ayamController::class, 'edit']);
    Route::get('/ayam/delete/{id}', [ayamController::class, 'delete'])->name('delete');
    Route::get('/ayam/{id}/show', [ayamController::class, 'show'])->where('id', '[0-9]+');

    Route::get('/ayam/{id}', [ayamController::class, 'edit']);
    Route::delete('/deleteimage/{id}', [ayamController::class, 'deleteimage']);
    Route::delete('/deletecover/{id}', [ayamController::class, 'deletecover']);

    Route::resource('pelanggan', pelangganController::class);
    Route::get('/pelanggan', [pelangganController::class, 'index']);
    Route::get('/pelanggan/{id}/show', [pelangganController::class, 'show'])->where('id', '[0-9]+');
    Route::get('/pelanggan/delete/{id}', [pelangganController::class, 'delete'])->name('delete');
    Route::get('/pelanggan/{id}/edit', [pelangganController::class, 'edit']);

    Route::resource('client', clientController::class);
    Route::get('/client', [clientController::class, 'index']);
    Route::get('/client/{id}/show', [clientController::class, 'show'])->where('id', '[0-9]+');
    Route::get('/client/delete/{id}', [clientController::class, 'delete'])->name('delete');
    Route::get('/client/{id}/edit', [clientController::class, 'edit']);

    Route::resource('/trans', transaksiController::class);
    Route::post('/post', [transaksiController::class, 'store']);
    Route::get('/trans', [transaksiController::class, 'index']);
    Route::get('/trans/{id}/show', [transaksiController::class, 'show'])->where('id', '[0-9]+');
    Route::get('/trans/delete/{id}', [transaksiController::class, 'delete'])->name('delete');
    Route::get('/trans/{id}/edit', [transaksiController::class, 'edit']);

    Route::resource('/info', beritaController::class);
    Route::get('/info', [beritaController::class, 'index']);
    Route::get('/info/{id}/show', [beritaController::class, 'show'])->where('id', '[0-9]+');
    Route::get('/info/delete/{id}', [beritaController::class, 'delete'])->name('delete');
    Route::get('/info/{id}/edit', [beritaController::class, 'edit']);

    Route::resource('kontak', dashboard_kontak::class);
    Route::get('/kontak/{id}/show', [dashboard_kontak::class, 'show'])->where('id', '[0-9]+');
    Route::get('/kontak', [dashboard_kontak::class, 'index']);
    Route::get('/kontak/{id}/edit', [dashboard_kontak::class, 'edit']);

    Route::resource('kategori', kategoriController::class);
    Route::get('/kategori', [kategoriController::class, 'index']);
    Route::get('/kategori/{id}/show', [kategoriController::class, 'show'])->where('id', '[0-9]+');
    Route::get('/kategori/{id}/edit', [kategoriController::class, 'edit']);
});


// Route::resource('/news', frontendController::class);
Route::get('/tes', [tesController::class, 'index']);
// Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
// Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
// Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
// Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');

Route::get('/', [frontendController::class, 'index']);
Route::get('/detail/{id}/show', [frontendController::class, 'show']);
Route::get('/showBerita/{id}/showBerita', [frontendController::class, 'showBerita']);
Route::get('/informasi', [frontendController::class, 'berita']);
Route::get('/koleksi', [frontendController::class, 'koleksi']);
Route::get('/keranjang', [frontendController::class, 'showKeranjang']);
Route::get('/tampil/{id}', [frontendController::class, 'tampil']);
Route::get('/kontak', [frontendController::class, 'kontak']);


Route::get('add_to_cart', [MyAccountController::class, 'add_to_cart'])->name('/add_to_cart');
Route::get('add_to_cart/{x}', [MyAccountController::class, 'add_to_cart'])->name('/add_to_cart');
Route::get('cart', [MyAccountController::class, 'cart'])->name('/cart');
Route::get('/cart/{id}', [frontendController::class, 'cart']);


// Route::get('/cartSalah', [frontendController::class, 'cart'])->name('cart');
Route::delete('/remove_from_cart', [frontendController::class, 'remove'])->name('remove_from_cart');
Route::patch('update_cart', [frontendController::class, 'update'])->name('update_cart');
Route::patch('update-cart', [frontendController::class, 'update'])->name('update_cart');
Route::get('add_to_cart/{id}', [frontendController::class, 'add_to_cart'])->name('add_to_cart');

Route::get('/dashboard', [dashboard_kontak::class, 'index']);
Route::get('/tes', [frontendController::class, 'tes']);
Route::post('/search', [cariController::class, 'search']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/exportlaporan', [App\Http\Controllers\frontendController::class, 'exportlaporan'])->name('exportlaporan');
