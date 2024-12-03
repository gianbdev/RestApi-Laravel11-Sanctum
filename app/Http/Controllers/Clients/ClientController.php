<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\ClientRequest;
use App\Http\Requests\Clients\UpdateClientRequest;
use App\Http\Resources\Clients\ClientResource;
use App\Models\Client;
use App\Services\ClientService;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = $this->clientService->getAllClients();
        return ClientResource::collection($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $client = $this->clientService->createClient($request->validated());
        return new ClientResource($client);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $client = $this->clientService->findClientById($id);

        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        return new ClientResource($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $updatedClient = $this->clientService->updateClient($client, $request->validated());
        return new ClientResource($updatedClient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $this->clientService->deleteClient($client);
        return response()->json(['message' => 'Client deleted successfully']);
    }
}
