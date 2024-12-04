<?php

namespace App\Http\Requests\TypeDocument;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'typeDocument_name' => 'nullable|string',
            'typeDocument_status' => 'nullable|boolean',
        ];
    }
}
