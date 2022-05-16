<?php

namespace App\Providers;

use App\Http\Resources\EventResource;
use Illuminate\Support\ServiceProvider;
use App\Http\Resources\WorkshopResource;

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
        EventResource::withoutWrapping();
        WorkshopResource::withoutWrapping();
    }
}
