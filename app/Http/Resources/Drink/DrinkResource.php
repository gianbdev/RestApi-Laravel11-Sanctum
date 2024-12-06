<?php

namespace App\Http\Resources\Drink;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DrinkResource extends JsonResource
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
            'name' => $this->drink_name,
            'status' => $this->drink_status ? 'active' : 'inactive',
            'create_at' => $this->create_at->toDateTineString(),
        ];
    }
}
