<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaRequest extends CustomFormRequest
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
            "nome" => 'required|string|min:3|max:255',
            "valor" => 'required|decimal:2',
            "disponivel" => 'required|boolean',
            "ead" => 'required|boolean',
        ];
    }

    public function messages():array
    {
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'decimal' => 'O campo :attribute é to tipo decimal',
            'min' => 'O minímo de caracteres do campo :attribute é de 3 digitos',
            'max' => 'O maximo de caracteres do campo :attribute é de 255 digitos',
            'string'=> 'O campo :attribute é do tipo texto',
            'boolean' => 'Campo :attribute tipo bool'
        ];
    }
}