<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'client_name' => 'required|string|max:55',
            'client_last_name' => 'required|string|max:55',
            'client_phone' => 'required|string|unique:clients,client_phone|max:10',
            'client_ocupation' => 'required|string|max:100',
            'client_status' => 'required|boolean',
        ];
    }

}
