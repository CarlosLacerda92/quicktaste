<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RestauranteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'nome'          => $this->nome,
            'cep'           => $this->cep,
            'logradouro'    => $this->logradouro,
            'bairro'        => $this->bairro,
            'numero'        => $this->numero,
            'cidade'        => $this->cidade,
            'estado'        => $this->estado,
            'telefone'      => $this->telefone,
            'whatsapp'      => $this->whatsapp,
            'instagram'     => $this->instagram,
            'nota'          => str_replace('.', ',', $this->nota),
            'tempo_entrega' => $this->tempo_entrega,
            'taxa_entrega'  => $this->taxa_entrega,
            'categoria'     => $this->categoria,
            'criado_em'     => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y H:i:s'),
            'atualizado_em' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d/m/Y H:i:s')
        ];
    }
}
