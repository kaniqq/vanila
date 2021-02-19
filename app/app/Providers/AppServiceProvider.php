<?php

namespace App\Providers;
use App\animal\animal;
use App\animal\item;
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
        app()->singleton(animal::class, function ($app) {
            return new animal('male');
        });

        app()->singleton(item::class, function ($app) {
            return new item(100);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
