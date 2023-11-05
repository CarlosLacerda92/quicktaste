<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestauranteCardapioRequest extends FormRequest
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
            'id_restaurante'  => [
                'required',
                'max:20',
                'exists:restaurantes,id'
            ],
            'nome' => [
                'required',
                'max:255'
            ],
            'descricao' => [
                'required'
            ],
            'categoria' => [
                'required',
                'max:20',
                'exists:cardapios_categorias,id'
            ],
            'preco' => [
                'required',
                'numeric'
            ]
        ];
    }
}
