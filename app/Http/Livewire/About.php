<?php

namespace App\Http\Livewire;

use App\Models\About as ModelsAbout;
use App\Models\KeyManagement;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about', [
            'about' => ModelsAbout::latest()->first(),
            'key_management' => KeyManagement::oldest()->get()
        ])->extends('layouts.main');
    }
}
