<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffValidationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|int|exists:App\Models\Staff,id',
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'company-name' => 'required|string|exists:App\Models\Company,name',
            'email' => 'required|string',
            'phone' => 'required|string'
        ];
    }
}
