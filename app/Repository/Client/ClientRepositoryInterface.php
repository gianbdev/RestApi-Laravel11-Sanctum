<?php

namespace App\Repository\Client;

use App\Models\Client;

interface ClientRepositoryInterface
{
    public function getClients();
    public function findClientById(int $id): ?Client;
    public function clientsList();
}
