<?php

namespace App\Services\Client\impl;

use App\Models\Client;
use App\Repository\Client\ClientRepositoryInterface;
use App\Services\Client\ClientService;

class ClientServiceImpl implements ClientService
{
    protected $clientRepository;
    /**
     * Create a new class instance.
     */
    public function __construct(ClientRepositoryInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function getAllClients()
    {
        return $this->clientRepository->getClients();
    }

    public function getClientById(int $id): ?Client
    {
        return $this->clientRepository->findClientById($id);
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

    public function getClientsList()
    {
        return $this->clientRepository->clientsList();
    }
}
