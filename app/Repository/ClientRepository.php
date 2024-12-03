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

    public function getAllClients()
    {
        return Client::all();
    }

    public function findClientById(int $id): ?Client
    {
        return Client::find($id);
    }
}
