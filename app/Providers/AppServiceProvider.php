<?php

namespace App\Providers;

use App\Models\Wishes;
use App\Observers\WishesObserver;
use Illuminate\Support\ServiceProvider;

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
        Wishes::observe(WishesObserver::class);
    }
}
