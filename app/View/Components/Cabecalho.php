<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cabecalho extends Component
{
    public $qtdNotificacoes;
    public $usuario;

    /**
     * Create a new component instance.
     */
    public function __construct($qtdNotificacoes, $usuario)
    {
        $this->qtdNotificacoes = $qtdNotificacoes;
        $this->usuario         = $usuario;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cabecalho');
    }
}
