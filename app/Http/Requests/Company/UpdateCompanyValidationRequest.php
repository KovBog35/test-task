<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompanyValidationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|int|exists:App\Models\Company,id',
            'name' => [
                'required',
                'string',
                Rule::unique('companies')->ignore($this->id),
            ],
            'email' => [
                'required',
                'string',
                Rule::unique('companies')->ignore($this->id),
            ]
        ];
    }
}
