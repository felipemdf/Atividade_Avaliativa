<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class base extends Component
{

    public $alias;
    /**
     * Create a new component instance.
     */
    public function __construct($alias)
    {
        $this->alias = $alias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base');
    }
}
