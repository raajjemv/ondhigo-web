<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Headings extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $heading;
    public $color;
    public function __construct($heading, $color = NULL)
    {
        $this->heading = $heading;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.headings');
    }
}
