<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetUserActiveRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        return true; // ! fix this
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'role_id' => 'required|exists:roles,id',
        ];
    }
}
