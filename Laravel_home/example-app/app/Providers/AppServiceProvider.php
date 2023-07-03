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
        // Simple DI
        $this->app->bind(ICityService::class, CityService::class);

        $this->app->bind(CityController::class, function ($app) {
            $cityService = $app->make(ICityService::class);
            $cacheDecorator = new CacheDecorator($cityService, "Cities");
            return new CityController($cityService, $cacheDecorator);
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
