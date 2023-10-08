<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoDisciplinaRequest extends CustomFormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "aluno_id" => 'required|integer|exists:alunos,id',
            "disciplinas.*.disciplina_id" => 'required|integer|exists:disciplinas,id',
            "periodo_id" => 'required|integer|exists:periodos,id',
        ];
    }

    public function messages():array
    {
        
        return [
            'exists' => 'ID não foi encontrado na coluna :attribute',
            'required' => 'O campo :attribute é obrigatorio',
        ];
    }
}
