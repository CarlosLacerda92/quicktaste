<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CadastroAtualizacaoUsuarioEnderecoRequest;
use App\Http\Resources\UsuarioEnderecoResource;
use App\Models\UsuarioEndereco;

class UsuarioEnderecoController extends Controller
{
    /**
     * @param CadastroAtualizacaoUsuarioEnderecoRequest $request.
     * @return UsuarioEnderecoResource $usuario.
     * @access public
     */
    public function criarEnderecoUsuario(CadastroAtualizacaoUsuarioEnderecoRequest $request) {

        #   Pega apenas o que foi validado pelo CadastroAtualizacaoUsuarioEnderecoRequest, ignorando dados "extras" e/ou preenchidos incorretamente.
        $dados = $request->validated();

        #   Insere o registro na tabela USUARIOS_ENDERECOS.
        $usuarioEndereco = UsuarioEndereco::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UsuarioResource.
        return new UsuarioEnderecoResource($usuarioEndereco); 
    }

    public static function buscarEnderecoUsuario($id) {

        if (!$id) {
            return null;
        }

        $endereco = UsuarioEndereco::where('usuarios_enderecos.status', 1)->where('usuarios_enderecos.id_usuario', $id)->select('usuarios_enderecos.*')->first();

        return new UsuarioEnderecoResource($endereco); 
    }
}
