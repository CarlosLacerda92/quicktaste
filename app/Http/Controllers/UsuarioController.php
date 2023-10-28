<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroAtualizacaoUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller {

    public function criarUsuario(CadastroAtualizacaoUsuarioRequest $request) {

        #   Pega apenas o que foi validado pelo CadastroAtualizacaoUsuarioRequest, ignorando dados "extras".
        $dados = $request->validated();

        #   Criptografa a senha.
        $dados['senha'] = bcrypt($dados['senha']);

        #   Insere o registro na tabela USUARIOS.
        $usuario = Usuario::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UsuarioResource.
        return new UsuarioResource($usuario);
    }

    public function login(Request $request) {

        #   Validação dos campos informados pelo usuário para login.
        $campos = $request->validate([
            'name'     => ['required', 'min:3', 'max:255'],
            'email'    => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        #   Criptografando a senha do usuário antes de salvá-la.
        $campos['password'] = bcrypt($campos['password']);
        
        //User::create($campos);

        return 'Usuário logado com sucesso!';
    }
}
