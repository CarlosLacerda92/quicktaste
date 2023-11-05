<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class RestauranteCardapio extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'restaurantes_cardapios';

    #   Quais campos podem ser cadastrados no banco via chamadas API.
    protected $fillable = [
        'id_restaurante',
        'nome',
        'descricao',
        'categoria',
        'preco',
        'status '
    ];
}
