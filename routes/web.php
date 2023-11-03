<?php

use App\Http\Controllers\RestauranteController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/bemvindo', function () {
    return view('index');
});

#   Rota de busca de restaurantes.  DEPOIS, ADICIONAR ESSA ROTA NAS ROTAS AUTENTICADAS!!!
Route::post('/restaurantes', [RestauranteController::class, 'buscar']);

/* #   Rota dos cardárpios dos restaurantes.
Route::post('/cardapio', [RestauranteController::class, 'buscar']); */