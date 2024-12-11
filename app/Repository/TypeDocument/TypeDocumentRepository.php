<?php

namespace App\Repository;

use App\Models\TypeDocument;

class TypeDocumentRepository implements TypeDocumentRepositoryInterface
{
    public function getTypeDocuments()
    {
        return TypeDocument::paginate(10);
    }

    public function findTypeDocumentById(int $id): ?TypeDocument
    {
        return TypeDocument::find($id);
    }

    public function typeDocumentsList()
    {
        return TypeDocument::all();
    }
}
