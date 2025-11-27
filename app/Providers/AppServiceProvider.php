<?php

namespace App\Providers;

use Laravel\Ui\Presets\Bootstrap;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Attributes\Boot;

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
        /* use bootstrap pagination */
          Paginator::useBootstrapFive();
    }
}
