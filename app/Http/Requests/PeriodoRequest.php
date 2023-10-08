<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodoRequest extends CustomFormRequest
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
            'ano' => 'required|integer',
            'termo' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Campo :attribute obrigatorio',
            'integer' => 'Campo :attribute é to tipo inteiro'
        ];
    }
}
