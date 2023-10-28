<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#   Rotas criadas apenas para criação rápida de usuários da plataforma.

/* Route::get('/criarTeste', function () {
    return view('login.criarTeste');
}); */

//Route::post('/criarTeste', [UsuarioController::class, 'criarTeste']);

#   Fim das rotas de teste.

Route::get('/', function () {
    return view('login.login');
});

//Route::post('/entrar', [UsuarioController::class, 'criar']);