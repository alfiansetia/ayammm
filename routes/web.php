<?php

use App\Http\Controllers\AyamController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\KeranjangController;
use App\Http\Controllers\Frontend\KoleksiController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\TransaksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisAyamController;
use App\Http\Controllers\KategoriController as ControllersKategoriController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TransaksiController as ControllersTransaksiController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('index.koleksi');
Route::get('/koleksi/{ayam}', [KoleksiController::class, 'show'])->name('index.koleksi.show');

Route::get('/list-kategori/{kategori}', [KategoriController::class, 'show'])->name('index.kategori.show');

Route::get('/list-berita', [BeritaController::class, 'index'])->name('index.berita');
Route::get('/list-berita/{berita}', [BeritaController::class, 'show'])->name('index.berita.show');

Route::get('/kontak', [KontakController::class, 'index'])->name('index.kontak');

Route::get('/exportlaporan', [frontendController::class, 'exportlaporan'])->name('exportlaporan');


Route::group(['middleware' => ['auth']], function () {

    Route::delete('/list-keranjang/{keranjang}', [KeranjangController::class, 'destroy'])->name('index.keranjang.destroy');
    Route::get('/list-keranjang', [KeranjangController::class, 'index'])->name('index.keranjang');
    Route::post('/list-keranjang', [KeranjangController::class, 'store'])->name('index.keranjang.store');

    Route::get('/list-transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('index.transaksi.show');
    Route::get('/list-transaksi', [TransaksiController::class, 'index'])->name('index.transaksi');
    Route::post('/list-transaksi', [TransaksiController::class, 'store'])->name('index.transaksi.store');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['isAdmin']], function () {
        Route::resource('ayam', AyamController::class);
        Route::resource('kategori', ControllersKategoriController::class);
        Route::resource('jenis_ayam', JenisAyamController::class);
        // Route::resource('cover', gambarController::class);
        Route::resource('transaksi', ControllersTransaksiController::class);
        // Route::resource('info', beritaController::class);
        // Route::resource('kontak', dashboard_kontak::class);
        Route::resource('message', MessageController::class);
    });
});
