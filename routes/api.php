<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutenticacaoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/autenticar', [AutenticacaoController::class, 'autenticar']);

#   Endpoints que necessitam de autenticação para serem executados.
Route::middleware(['auth:sanctum'])->group(function() {
    Route::post('/criarUsuario', [UsuarioController::class, 'criarUsuario']);
    Route::get('/exibirTodosUsuarios', [UsuarioController::class, 'exibirTodosUsuarios']);
});

/* #   Criação de novos usuários.
Route::post('/criarUsuario', [UsuarioController::class, 'criarUsuario']);

#   Exibir todos os usuários criados.
Route::get('/exibirTodosUsuarios', [UsuarioController::class, 'exibirTodosUsuarios']); */