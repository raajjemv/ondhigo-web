<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Partners extends Component
{
    public $partner_list;
    public function render()
    {
        return view('livewire.partners');
    }
}
