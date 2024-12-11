<?php

namespace App\Services\Client;

use App\Models\Client;

interface ClientService
{
    public function getAllClients();
    public function getClientById(int $id): ?Client;
    public function createClient(array $data): Client;
    public function updateClient(Client $client, array $data): Client;
    public function deleteClient(Client $client);
    public function getClientsList();
}
