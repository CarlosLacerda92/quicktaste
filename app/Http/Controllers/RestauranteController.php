<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RestauranteRequest;
use App\Http\Resources\RestauranteResource;
use App\Models\RestauranteCardapio;

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

        $texto = $request->inputBusca;

        #   Buscando os restaurantes.
        if ($texto) {
            $restaurantes = Restaurante::where('restaurantes.status', 1)->join('restaurantes_categorias', 'categoria', '=', 'restaurantes_categorias.id')->select('restaurantes.*', 'restaurantes_categorias.descricao as nomecategoria')->where('nome', 'like', "%{$texto}%")->orderBy('nome')->get();
        }
        else {
            $restaurantes = Restaurante::where('restaurantes.status', 1)->join('restaurantes_categorias', 'categoria', '=', 'restaurantes_categorias.id')->select('restaurantes.*', 'restaurantes_categorias.descricao as nomecategoria')->orderBy('nome')->get();
        }

        if ($restaurantes->isEmpty()) {
            return null;
        }

        //return RestauranteResource::collection($restaurantes);

        $restaurantes = RestauranteResource::collection($restaurantes);

        return view('components.card-grid', compact('restaurantes'));
    }

    public function buscarDadosRestaurante(Request $request) {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $dados = $request->validate([
            'id' => 'required'
        ]);

        #   Buscar dados do restaurante.
        $restaurante = Restaurante::where('restaurantes.status', 1)->where('restaurantes.id', $dados['id'])->join('restaurantes_categorias', 'categoria', '=', 'restaurantes_categorias.id')->select('restaurantes.*', 'restaurantes_categorias.descricao as nomecategoria')->get()->first();

        if ($restaurante->count() <= 0) {
            return redirect()->route('/bemvindo')->withInput();
        }

        #   Buscar cardápio do restaurante.
        $cardapio = RestauranteCardapio::where('restaurantes_cardapios.status', 1)->where('restaurantes_cardapios.id_restaurante', $dados['id'])->join('cardapios_categorias', 'categoria', '=', 'cardapios_categorias.id')->select('restaurantes_cardapios.*', 'cardapios_categorias.descricao as nomecategoria')->orderBy('restaurantes_cardapios.nome')->get();

        if ($cardapio->count() <= 0) {
            $cardapio = null;
        }

        return view('restaurante', compact('restaurante', 'cardapio'));
    }
}
