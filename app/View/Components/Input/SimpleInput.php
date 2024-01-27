<?php

namespace App\View\Components\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleInput extends Component
{
    public $type;
    public $wireModel;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'text', $wireModel = null)
    {
        $this->type = $type;
        $this->wireModel = $wireModel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.simple-input');
    }
}
