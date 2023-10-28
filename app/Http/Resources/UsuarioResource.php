<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'usuario'       => $this->id,
            'nome'          => $this->nome,
            'email'         => $this->email
        ];
    }
}
