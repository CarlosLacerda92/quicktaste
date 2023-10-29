<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroAtualizacaoUsuarioEnderecoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_usuario' => [
                'required',
                'max:20',
                'exists:usuarios,id'
            ],
            'cep' => [
                'required',
                'max:8'
            ],
            'logradouro' => [
                'required',
                'max:255'
            ],
            'bairro' => [
                'required',
                'max:255'
            ],
            'numero' => [
                'required',
                'max:4'
            ],
            'cidade' => [
                'required',
                'max:255'
            ],
            'estado' => [
                'required',
                'max:2'
            ]
        ];
    }
}
