<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestauranteRequest;
use App\Http\Resources\RestauranteResource;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{

    public function cadastrarRestaurante(RestauranteRequest $request) {

        #   Pega apenas o que foi validado pelo CadastroAtualizacaoUsuarioRequest, ignorando dados "extras" e/ou preenchidos incorretamente.
        $dados = $request->validated();

        #   Insere o registro na tabela USUARIOS.
        $restaurante = Restaurante::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UsuarioResource.
        return new RestauranteResource($restaurante);
    }

    public function buscar(Request $request) {

        $restaurantes = [
            [
                'id'     => 1,
                'nome'   => 'Rest. 1',
                'imgsrc' => 'storage/fotos_restaurantes/id_1.jpg'
            ],
            [
                'id'     => 2,
                'nome'   => 'Rest. 2',
                'imgsrc' => 'storage/fotos_restaurantes/id_2.jpg'
            ],
            [
                'id'     => 3,
                'nome'   => 'Rest. 3',
                'imgsrc' => 'storage/fotos_restaurantes/id_3.jpg'
            ],
            [
                'id'     => 4,
                'nome'   => 'Rest. 4',
                'imgsrc' => 'storage/fotos_restaurantes/id_4.jpg'
            ],
            [
                'id'     => 5,
                'nome'   => 'Rest. 5',
                'imgsrc' => 'storage/fotos_restaurantes/id_5.jpg'
            ],
            [
                'id'     => 6,
                'nome'   => 'Rest. 6',
                'imgsrc' => 'storage/fotos_restaurantes/id_6.jpg'
            ]
        ];

        if (!$restaurantes) {
            return null;
        }

        return view('components.card-grid', compact('restaurantes'));
    }
}
