<?php

namespace App\Repository\Client;

use App\Models\Client;

class ClientRepository implements ClientRepositoryInterface
{
    public function getClients()
    {
        return Client::paginate(10);
    }

    public function findClientById(int $id): ?Client
    {
        return Client::find($id);
    }

    public function clientsList()
    {
        return Client::all();
    }
}
