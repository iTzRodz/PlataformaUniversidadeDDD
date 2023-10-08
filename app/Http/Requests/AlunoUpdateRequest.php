<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoUpdateRequest extends CustomFormRequest
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
            'nome' => 'min:3|max:255|string',
            'sobrenome' => 'min:3|max:255|string',
            'email' => 'string|email:rfc,dns',
            'dataCadastro' => 'date',
            'ativo' => 'boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'min' => 'O minímo de caracteres do campo :attribute é de 3 digitos',
            'string'=> 'O campo :attribute é do tipo texto',
            'date' => 'Campo :attribute tipo data formato yyyy-mm-dd',
            'email' => 'Campo :attribute tipo email',
            'boolean' => 'Campo :attribute tipo bool',
        ];
    }
}
