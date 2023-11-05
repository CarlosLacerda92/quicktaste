<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RestauranteCardapioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'             => $this->id,
            'id_restaurante' => $this->id_restaurante,
            'nome'           => $this->nome,
            'descricao'      => $this->descricao,
            'categoria '     => $this->categoria,
            'status'         => $this->status,
            'criado_em'      => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y H:i:s'),
            'atualizado_em'  => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d/m/Y H:i:s')
        ];
    }
}
