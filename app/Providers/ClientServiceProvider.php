<?php

namespace App\Providers;

use App\Repository\Client\ClientRepository;
use App\Repository\Client\ClientRepositoryInterface;
use App\Services\Client\ClientService;
use App\Services\Client\impl\ClientServiceImpl;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
        $this->app->bind(ClientService::class, ClientServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
