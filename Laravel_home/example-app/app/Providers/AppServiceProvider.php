<?php

namespace App\Providers;

use App\Decorators\CacheDecorator;
use App\Http\Controllers\CityController;
use App\Services\CityService;
use App\Services\Interfaces\ICityService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Simple DI
        //$this->app->bind(ICityService::class, CityService::class);

        $this->app->bind(CityController::class, function()
        {
            return new CityController(new CacheDecorator($this->app->make(CityService::class), "Cities"));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
