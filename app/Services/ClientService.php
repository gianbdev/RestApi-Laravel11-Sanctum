<?php

namespace App\Services;

use App\Models\Client;
use App\Repository\ClientRepository;

class ClientService
{
    protected $clientRepo;
    /**
     * Create a new class instance.
     */
    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepo = $clientRepo;
    }

    public function getAllClients()
    {
        return $this->clientRepo->getAllClients();
    }

    public function findClientById(int $id): ?Client
    {
        return $this->clientRepo->findClientById($id);
    }

    public function createClient(array $data): Client
    {

        return Client::create($data);
    }

    public function updateClient(Client $client, array $data): Client
    {

        $client->update($data);
        return $client;
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
    }
}
