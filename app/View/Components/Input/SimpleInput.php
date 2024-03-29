<?php

namespace App\View\Components\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleInput extends Component
{
    public $wireModel, $error;
    /**
     * Create a new component instance.
     */
    public function __construct($wireModel = null, $error = null)
    {
        $this->wireModel = $wireModel;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.simple-input');
    }
}
