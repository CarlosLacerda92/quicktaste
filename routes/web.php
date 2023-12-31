<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RestauranteController;

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
    Auth::guard('web')->logout();
    return view('login');
})->name('login');

Route::get('/bemvindo', function () {

    if (Auth::check()) {
        return view('index');
    }

    return redirect()->route('login');
    
})->name('/bemvindo');

Route::post('/restaurante', [RestauranteController::class, 'buscarDadosRestaurante'])->name('/restaurante');

/* Route::get('/restaurante', function () {

    if (Auth::check()) {
        return view('restaurante');
    }

    return redirect()->route('login');
    
})->name('/restaurante'); */