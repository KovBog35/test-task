<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffValidationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'company-name' => 'required|string|exists:App\Models\Company,name',
            'email' => 'required|string',
            'phone' => 'required|string'
        ];
    }
}
