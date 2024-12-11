<?php

namespace App\Providers;

use App\Repository\Drink\DrinkRepository;
use App\Repository\Drink\DrinkRepositoryInterface;
use App\Services\Drink\DrinkService;
use App\Services\Drink\DrinkServiceInterface;
use Illuminate\Support\ServiceProvider;

class DrinkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DrinkRepositoryInterface::class, DrinkRepository::class);
        $this->app->bind(DrinkServiceInterface::class, DrinkService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
