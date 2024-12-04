<?php

namespace App\Services;

use App\Models\TypeDocument;
use App\Repository\TypeDocumentRepository;

class TypeDocumentService
{
    protected $typeDocumentoRepository;
    /**
     * Create a new class instance.
     */
    public function __construct(TypeDocumentRepository $typeDocumentRepository)
    {
        $this->typeDocumentoRepository = $typeDocumentRepository;
    }

    public function getAllTypeDocuments()
    {
        return $this->typeDocumentoRepository->getAllTypeDocuments();
    }

    public function findTypeDocumentById($id)
    {
        return TypeDocument::find($id);
    }

    public function createTypeDocument(array $data): TypeDocument
    {
        return TypeDocument::create($data);
    }

    public function updateTypeDocument(TypeDocument $user, array $data): TypeDocument
    {
        $user->update($data);
        return $user;
    }

    public function deleteTypeDocument(TypeDocument $user)
    {
        $user->delete();
    }

    public function listTypeDocument()
    {
        return $this->typeDocumentoRepository->getListTypeDocument();
    }
}
