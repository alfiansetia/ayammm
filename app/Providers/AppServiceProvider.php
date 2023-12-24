<?php

namespace App\Providers;

use App\Models\Ayam;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Kontak;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(
            [
                'layouts_frontend.drawer',
                'layouts_frontend.header',
                'layouts_frontend.template',
                'frontend.partial.berita',
                'koleksi',
                'frontend.detail',
                'frontend.keranjang',
            ],
            function ($view) {
                $view->with('user', User::with('keranjang')->withCount('keranjang')->find(auth()->id()));
                $view->with('kontak', Kontak::first());
                // $view->with('berita', Berita::with('user')->orderBy('id', 'desc')->paginate(3));
                // $view->with('kategori', Kategori::all());
                $view->with('ayam', Ayam::orderBy('id', 'desc')->paginate(4));
            }
        );
        Paginator::useBootstrap();
        // Paginator::defaultView('vendor/pagination/pagination_view');

        // Paginator::defaultSimpleView('vendor/pagination/pagination_view');
    }
}
