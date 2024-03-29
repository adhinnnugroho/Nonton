<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleButton extends Component
{

    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($color = "alerange")
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.simple-button');
    }
}
