<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function buscar(Request $request) {

        $restaurantes = [
            [
                'id' => 1,
                'nome' => 'Rest. 1',
            ],
            [
                'id' => 2,
                'nome' => 'Rest. 2',
            ],
            [
                'id' => 3,
                'nome' => 'Rest. 3',
            ]
        ];

        return view('components.card-grid', compact('restaurantes'));
    }
}
