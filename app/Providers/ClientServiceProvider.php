<?php

namespace App\Providers;

use App\Repository\Client\ClientRepository;
use App\Repository\Client\ClientRepositoryInterface;
use App\Services\Client\ClientService;
use App\Services\Client\ClientServiceInterface;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
        $this->app->bind(ClientServiceInterface::class, ClientService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
