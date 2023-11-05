<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\UsuarioEnderecoController;
use App\Http\Controllers\RestauranteCardapioController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/registrar', [AutenticacaoController::class, 'registrar']);
Route::post('/autenticar', [AutenticacaoController::class, 'autenticar']);

#   Endpoints que necessitam de autenticação para serem executados.
Route::middleware(['auth:sanctum'])->group(function() {

    #   Usuários.
    Route::get('/exibirTodosUsuarios', [UserController::class, 'exibirTodosUsuarios'])->name('exibirTodosUsuarios');
    Route::post('/criarEnderecoUsuario', [UsuarioEnderecoController::class, 'criarEnderecoUsuario']);
    Route::delete('/sair', [AutenticacaoController::class, 'sair'])->name('sair');

    #   Restaurantes.
    Route::post('/cadastrarRestaurante', [RestauranteController::class, 'cadastrarRestaurante']);
    Route::post('/restaurantes', [RestauranteController::class, 'buscar']);

    #   Cardápios.
    Route::post('/criarPrato', [RestauranteCardapioController::class, 'criarPrato']);
});