<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroAtualizacaoUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller {

    /**
     * @param CadastroAtualizacaoUsuarioRequest $request.
     * @return UsuarioResource $usuario.
     * @access public
     */
    public function criarUsuario(CadastroAtualizacaoUsuarioRequest $request) {

        #   Pega apenas o que foi validado pelo CadastroAtualizacaoUsuarioRequest, ignorando dados "extras" e/ou preenchidos incorretamente.
        $dados = $request->validated();

        #   Criptografa a senha antes de enviá-la para a base de dados.
        $dados['senha'] = bcrypt($dados['senha']);

        #   Insere o registro na tabela USUARIOS.
        $usuario = Usuario::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UsuarioResource.
        return new UsuarioResource($usuario);
    }

    /**
     * @return UsuarioResource $usuarios.
     * @access public
     */
    public function exibirTodosUsuarios() {

        $usuarios = Usuario::all();

        return UsuarioResource::collection($usuarios);
    }
}
