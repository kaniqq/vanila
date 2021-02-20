<?php

namespace App\Providers;
use App\Animal\animal;
use App\Animal\AnimalContract;
use App\Animal\item;
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
        app()->singleton(AnimalContract::class, function ($app) {
            if (config('database.gender') === 'female') {
                return new Animal('female');
            } else {
                return new Animal('male');
            }

        });

        app()->singleton(Item::class, function ($app) {
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
