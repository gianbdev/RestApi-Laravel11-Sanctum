<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'client_name' => 'nullable|string|max:255',
            'client_last_name' => 'nullable|string|max:255',
            'client_phone' => 'nullable|string|max:20',
            'client_ocupation' => 'nullable|string|max:255',
            'client_status' => 'nullable|string|max:50',
        ];
    }
}
