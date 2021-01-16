<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CoverCarousel extends Component
{
    public $landing_page_covers;
    public $toggle = true;
    public function render()
    {
        return view('livewire.cover-carousel');
    }
    public function load()
    {
        $this->toggle = !$this->toggle;
    }
}
