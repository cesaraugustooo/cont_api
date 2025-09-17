<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContagemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'qtd_contagem'=> 'required|int|min:0',
            'turmas_id_turma'=>'required|int',
        ];
    }
}
