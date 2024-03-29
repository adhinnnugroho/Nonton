<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RoundedButton extends Component
{
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'gold')
    {
        $this->color = $color;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.rounded-button');
    }
}
