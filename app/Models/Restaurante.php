<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

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
        'taxa_entrega'
    ];
}
