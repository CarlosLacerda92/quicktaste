<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardCardapio extends Component
{

    public $id;
    public $nome;
    public $descricao;
    public $categoria;
    public $descrcategoria;
    public $preco;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $nome, $descricao, $categoria, $descrcategoria, $preco)
    {
        $this->id             = $id;
        $this->nome           = $nome;
        $this->descricao      = $descricao;
        $this->categoria      = $categoria;
        $this->descrcategoria = $descrcategoria;
        $this->preco          = $preco;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-cardapio');
    }
}
