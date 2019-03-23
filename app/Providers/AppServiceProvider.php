<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use mysql_xdevapi\Schema;
use \Illuminate\Support\Facades;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Facades\Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
