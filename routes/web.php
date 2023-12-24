<?php

use App\Http\Controllers\dashboard_kontak;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\FrontendController as FrontendFrontendController;
use App\Http\Controllers\Frontend\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\Frontend\KeranjangController;
use App\Http\Controllers\Frontend\KoleksiController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\TransaksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [FrontendFrontendController::class, 'index'])->name('index');
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('index.koleksi');
Route::get('/koleksi/{ayam}', [KoleksiController::class, 'show'])->name('index.koleksi.show');

Route::get('/list-kategori/{kategori}', [KategoriController::class, 'show'])->name('index.kategori.show');

Route::get('/list-berita', [BeritaController::class, 'index'])->name('index.berita');
Route::get('/list-berita/{berita}', [BeritaController::class, 'show'])->name('index.berita.show');

Route::get('/kontak', [KontakController::class, 'index'])->name('index.kontak');


Route::get('/exportlaporan', [frontendController::class, 'exportlaporan'])->name('exportlaporan');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/list-keranjang', [KeranjangController::class, 'index'])->name('index.keranjang');

    Route::get('/list-transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('index.transaksi.show');
    Route::get('/list-transaksi', [TransaksiController::class, 'index'])->name('index.transaksi');
    Route::post('/list-transaksi', [TransaksiController::class, 'store'])->name('index.transaksi.store');

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
