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
    public function __construct($heading)
    {
        $this->heading = $heading;
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
