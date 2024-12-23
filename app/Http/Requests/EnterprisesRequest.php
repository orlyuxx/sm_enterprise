<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnterprisesRequest extends FormRequest
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
            'name' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'region' => 'required|string',
            'contact_number' => 'nullable|string',
            'email_address' => 'nullable|email',
        ];
    }
}
