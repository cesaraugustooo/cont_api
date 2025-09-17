<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User368Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome_user368' => 'required|string',
            'senha_user368' => 'required|string|max:8',
        ];
    }
}
