<?php

namespace App\Http\Controllers\TypeDocument;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeDocument\TypeDocumentRequest;
use App\Http\Requests\TypeDocument\UpdateTypeDocumentRequest;
use App\Http\Resources\TypeDocument\TypeDocumentResource;
use App\Models\TypeDocument;
use App\Services\TypeDocumentService;

class TypeDocumentController extends Controller
{
    protected $typeDocumentService;

    public function __construct(TypeDocumentService $typeDocumentService)
    {
        $this->typeDocumentService = $typeDocumentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeDocuments = $this->typeDocumentService->getAllTypeDocuments();
        return TypeDocumentResource::collection($typeDocuments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeDocumentRequest $request)
    {
        $typeDocument = $this->typeDocumentService->createTypeDocument($request->validated());
        return new TypeDocumentResource($typeDocument);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $typeDocument = $this->typeDocumentService->findTypeDocumentById($id);

        if (!$typeDocument) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        return new TypeDocumentResource($typeDocument);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeDocumentRequest $request, TypeDocument $typeDocument)
    {
        $updatedTypeDocument = $this->typeDocumentService->updateTypeDocument($typeDocument, $request->validated());
        return new TypeDocumentResource($updatedTypeDocument);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeDocument $typeDocument)
    {
        $this->typeDocumentService->deleteTypeDocument($typeDocument);
        return response()->json(['message' => 'Type Document deleted successfully']);
    }

    // Listar data de los clientes
    public function listTypeDocument(TypeDocumentService $typeDocumentService)
    {
        $typeDocuments = $typeDocumentService->listTypeDocument();
        return TypeDocumentResource::collection($typeDocuments);
    }
}
