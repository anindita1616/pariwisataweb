<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Wisata;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('wisatas', Wisata::simplePaginate(4));
        View::share('kuliners', Kuliner::simplePaginate(4));
        View::share('penginapans', Penginapan::SimplePaginate(4));
        View::share('events', Event::simplePaginate(4));
    }
}
