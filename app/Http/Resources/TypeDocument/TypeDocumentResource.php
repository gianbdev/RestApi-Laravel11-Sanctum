<?php

namespace App\Http\Resources\TypeDocument;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeDocumentResource extends JsonResource
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
            'typeDocument_name' => $this->typeDocument_name,
            'typeDocument_status' => $this->typeDocument_status ? 'active' : 'inactive',
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}
