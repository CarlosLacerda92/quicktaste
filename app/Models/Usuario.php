<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasApiTokens, HasFactory;
    
    public $timestamps = false;

    #   Quais campos podem ser cadastrados no banco via chamadas API.
    protected $fillable = [
        'email',
        'senha',
        'nome'
    ];
}
