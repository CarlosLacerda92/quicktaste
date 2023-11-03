<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurante extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'restaurantes';

    #   Quais campos podem ser cadastrados no banco via chamadas API.
    protected $fillable = [
        'nome',
        'cep',
        'logradouro',
        'bairro',
        'numero',
        'cidade',
        'estado',
        'telefone',
        'whatsapp',
        'instagram',
        'nota',
        'tempo_entrega',
        'taxa_entrega',
        'categoria'
    ];

    /* public function buscarRestaurantePorPalavra($texto) {
        return DB::table('restaurantes')->where('nome', 'LIKE', "%{$texto}%")->get();
    } */
}
