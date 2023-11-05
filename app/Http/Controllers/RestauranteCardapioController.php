<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestauranteCardapio;
use App\Http\Requests\RestauranteCardapioRequest;
use App\Http\Resources\RestauranteCardapioResource;

class RestauranteCardapioController extends Controller
{
    public function criarPrato(RestauranteCardapioRequest $request) {

        #   Pega apenas o que foi validado pelo CadastroAtualizacaoUsuarioRequest, ignorando dados "extras" e/ou preenchidos incorretamente.
        $dados = $request->validated();

        #   Insere o registro na tabela USUARIOS.
        $restaurante = RestauranteCardapio::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UsuarioResource.
        return new RestauranteCardapioResource($restaurante);
    }
}