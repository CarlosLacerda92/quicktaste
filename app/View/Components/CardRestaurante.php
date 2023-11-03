<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardRestaurante extends Component
{
    public $id;
    public $nome;
    public $nota;
    public $categoria;
    public $nomecategoria;
    public $tempoentrega;
    public $taxaentrega;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $nome, $nota, $categoria, $nomecategoria, $tempoentrega, $taxaentrega)
    {
        $this->id            = $id;
        $this->nome          = $nome;
        $this->nota          = $nota;
        $this->categoria     = $categoria;
        $this->nomecategoria = $nomecategoria;
        $this->tempoentrega  = $tempoentrega;
        $this->taxaentrega   = $taxaentrega;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-restaurante');
    }
}
