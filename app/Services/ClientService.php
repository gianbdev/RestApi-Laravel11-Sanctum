<?php

namespace App\Services;

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

    public function findClientById()
    {

    }

    public function createClient()
    {

    }

    public function updateClien()
    {

    }

    public function deleteClient()
    {

    }
}
