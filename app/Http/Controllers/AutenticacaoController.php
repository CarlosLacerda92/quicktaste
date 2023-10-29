<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;

class AutenticacaoController extends Controller
{
    public function autenticar(Request $request) {

        #   Verifica se o e-mail fornecido existe na base de dados.
        $usuario = Usuario::where('email', sha1($request->email))->first();

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
        $token = $usuario->createToken($request->nome_dispositivo)->plainTextToken;

        #   O token é retornado no formato json.
        return response()->json([
            'token' => $token
        ]);
    }
}
