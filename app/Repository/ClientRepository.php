<?php

namespace App\Repository;

use App\Models\Client;

class ClientRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getClients()
    {
        return Client::paginate(10);
    }

    public function findClientById(int $id): ?Client
    {
        return Client::find($id);
    }

    public function listClients()
    {
        return Client::all();
    }
}
