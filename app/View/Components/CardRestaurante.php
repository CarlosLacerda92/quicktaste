<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardRestaurante extends Component
{
    public $nome;
    public $imgsrc;

    /**
     * Create a new component instance.
     */
    public function __construct($nome, $imgsrc)
    {
        $this->nome   = $nome;
        $this->imgsrc = $imgsrc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-restaurante');
    }
}
