<?php

namespace App\Http\Livewire;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about', [
            'about' => ModelsAbout::latest()->first()
        ])->extends('layouts.main');
    }
}
