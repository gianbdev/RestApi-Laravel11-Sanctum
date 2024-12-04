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
        return $this->typeDocumentoRepository->getTypeDocuments();
    }

    public function getTypeDocumentById(int $id): ?TypeDocument
    {
        return $this->typeDocumentoRepository->findTypeDocumentById($id);
    }

    public function createTypeDocument(array $data): TypeDocument
    {
        return TypeDocument::create($data);
    }

    public function updateTypeDocument(TypeDocument $typeDocument, array $data): TypeDocument
    {
        $typeDocument->update($data);
        return $typeDocument;
    }

    public function deleteTypeDocument(TypeDocument $typeDocument)
    {
        $typeDocument->delete();
    }

    public function getTypeDocumentsList()
    {
        return $this->typeDocumentoRepository->TypeDocumentslist();
    }
}
