<?php

namespace App\Http\Resources\Clients;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'client_name' => $this->client_name,
            'client_last_name' => $this->client_last_name,
            'client_phone' => $this->client_phone,
            'client_ocupation' => $this->client_ocupation,
            'client_status' => $this->client_status ? 'active' : 'inactive',
            'created_at' => $this->created_at->toDateTimeString(),
            //'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
