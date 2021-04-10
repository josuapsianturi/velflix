<?php

namespace App\View\Components;

use Illuminate\View\Component;

class velflixCard extends Component
{
    public $velflix;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movie)
    {
        $this->velflix = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.velflix-card');
    }
}
