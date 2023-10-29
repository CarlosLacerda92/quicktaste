<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioEnderecoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'id_usuario' => $this->id_usuario,
            'cep'        => $this->cep,
            'logradouro' => $this->logradouro,
            'bairro'     => $this->bairro,
            'numero'     => $this->numero,
            'cidade'     => $this->cidade,
            'estado'     => $this->estado,
            'criado_em'  => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y H:i:s'),
        ];
    }
}
