<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestauranteRequest extends FormRequest
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
            'nome'  => [
                'required',
                'min:3',
                'max:255',
                'unique:restaurantes'
            ],
            'cep' => [
                'required',
                'min:8',
                'max:8'
            ],
            'logradouro' => [
                'required',
                'min:3',
                'max:255'
            ],
            'bairro' => [
                'required',
                'min:3',
                'max:255'
            ],
            'numero' => [
                'required',
                'min:1',
                'max:4'
            ],
            'cidade' => [
                'required',
                'min:3',
                'max:255'
            ],
            'estado' => [
                'required',
                'min:2',
                'max:2'
            ],
            'telefone' => [
                'required',
                'min:11',
                'max:11'
            ],
            'whatsapp' => [
                'min:11',
                'max:11'
            ],
            'instagram' => [
                'min:3',
                'max:255',
                'unique:restaurantes'
            ],
            'nota' => [
                'numeric'
            ],
            'tempo_entrega' => [
                'numeric'
            ],
            'taxa_entrega' => [
                'numeric'
            ],
            'categoria' => [
                'required',
                'max:20',
                'exists:restaurantes_categorias,id'
            ],
        ];
    }
}
