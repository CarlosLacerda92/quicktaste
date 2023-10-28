<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {

    public function criarTeste(Request $request) {

        #   Validação dos campos informados pelo usuário para login.
        $campos = $request->validate([
            'email' => ['required', 'email', 'min:5', 'max:100'],
            'senha' => ['required', 'min:8', 'max:500'],
            'nome'  => ['required', 'min:3', 'max:100'],
        ]);

        #   Verificar antes se o e-mail informado já existe na base de dados.
        //  to do code...

        $Usuario        = new Usuario();
        $Usuario->email = Hash::make($campos['email']);
        $Usuario->senha = Hash::make($campos['senha']);
        $Usuario->nome  = $campos['nome'];    
    
        $Usuario->save();

        return 'Usuário criado com sucesso!';
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

        return 'Usuário criado com sucesso!';
    }
}
