<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\AutenticacaoRequest;
use Illuminate\Validation\ValidationException;

class AutenticacaoController extends Controller
{

    public function registrar(UserRequest $request) {

        #   Pega apenas o que foi validado por UserRequest, ignorando dados "extras" e/ou preenchidos incorretamente.
        $dados = $request->validated();

        #   Criptografa o e-mail antes de enviá-lo para a base de dados.
        $dados['email'] = md5($dados['email']);

        #   A senha cadastrada pelo usuário é criptografada automaticamente pelo Laravel.

        #   Insere o registro na tabela USERS.
        $usuario = User::create($dados);

        #   Retorna os dados do usuário cadastrado de acordo com o formato estabelecido em UserResource.
        return new UserResource($usuario);
    }

    public function autenticar(AutenticacaoRequest $request) {

        #   Identificando qual a origem da requisição, para redirecionamento.
        $thunder = str_contains($request->header('User-Agent'), 'Thunder Client');

        $credenciais          = $request->validated();
        $credenciais['email'] = md5($credenciais['email']);

        $usuario = User::where('email', $credenciais['email'])->first();

        if (!$usuario) {

            if ($thunder) {
                throw ValidationException::withMessages([
                    'email' => ['O e-mail fornecido não existe!']
                ]);
            }
        }

        if (!Auth::attempt($credenciais)) {
            if ($thunder) {
                throw ValidationException::withMessages([
                    'email' => ['Os dados informados estão incorretos!']
                ]);
            }
        }

        #   Deletando todos os tokens criados anteriormente para o usuário (login único).
        $usuario->tokens()->delete();

        #   Passando pelas validações, um token é criado para o usuário.
        $token = $usuario->createToken(md5($usuario->email))->plainTextToken;

        #   O token é retornado no formato json quando a chamada for feita via Thunder Client.
        if ($thunder) {
            return response()->json([
                'token' => $token
            ]);
        }

        #   Redirecionando para a página principal.
        //return redirect()->route('/bemvindo')->with('list', $list);
        //return redirect()->route('/bemvindo');

        ///////////////////////////////////////////////////

        #   Verifica se o e-mail fornecido existe na base de dados.
        /* $usuario = Usuario::where('email', sha1($request->email))->first();

        #   Se não existir, lança uma exceção com uma mensagem de erro.
        if (!$usuario) {
            throw ValidationException::withMessages([
                'email' => ['O e-mail fornecido não existe!']
            ]);
        }

        #   Verifica a senha fornecida.
        Hash::check($request->senha, $usuario->senha);

        #   Se a senha fornecida estiver incorreta, lança uma exceção com uma mensagem de erro.
        if (!Hash::check($request->senha, $usuario->senha)) {
            throw ValidationException::withMessages([
                'email' => ['Senha incorreta!']
            ]);
        }

        #   Deletando todos os tokens criados anteriormente para o usuário (login único).
        $usuario->tokens()->delete();

        #   Passando pelas validações, um token é criado para o usuário.
        $token = $usuario->createToken($request->header('User-Agent'))->plainTextToken;

        #   O token é retornado no formato json.
        if (str_contains($request->header('User-Agent'), 'Thunder Client')) {
            return response()->json([
                'token' => $token
            ]);
        }

        //return redirect()->route('/bemvindo')->with('list', $list);
        return redirect()->route('/bemvindo'); */
    }
}
