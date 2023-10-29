<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UsuarioEndereco extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'usuarios_enderecos';

    #   Quais campos podem ser cadastrados no banco via chamadas API.
    protected $fillable = [
        'id_usuario',
        'cep',
        'logradouro',
        'bairro',
        'numero',
        'cidade',
        'estado'
    ];
}
