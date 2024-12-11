<?php

namespace App\Services\TypeDocument;

use App\Models\TypeDocument;

interface TypeDocumentServiceInterface
{
    public function getAllTypeDocuments();
    public function getTypeDocumentById(int $id): ?TypeDocument;
    public function createTypeDocument(array $data): TypeDocument;
    public function updateTypeDocument(TypeDocument $typeDocument, array $data): TypeDocument;
    public function deleteTypeDocument(TypeDocument $typeDocument);
    public function getTypeDocumentsList();
}
