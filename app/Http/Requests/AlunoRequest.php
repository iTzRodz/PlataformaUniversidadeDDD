<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends CustomFormRequest
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
            'nome' => 'required|min:3|max:255|string',
            'sobrenome' => 'required|min:3|max:255|string',
            'email' => 'required|string|email',
            'dataCadastro' => 'required|date',
            'ativo' => 'required|boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'min' => 'O minímo de caracteres do campo :attribute é de 3 digitos',
            'string'=> 'O campo :attribute é do tipo texto',
            'date' => 'Campo :attribute tipo data formato yyyy-mm-dd',
            'email' => 'Campo :attribute tipo email',
            'boolean' => 'Campo :attribute tipo bool',
        ];
    }
}
