<?php

namespace App\Repository\TypeDocument;

use App\Models\TypeDocument;

interface TypeDocumentRepositoryInterface
{
    public function getTypeDocuments();
    public function findTypeDocumentById(int $id): ?TypeDocument;
    public function typeDocumentsList();
}
