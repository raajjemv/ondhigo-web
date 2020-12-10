<?php

namespace App\Http\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery', [
            'galleries' => ModelsGallery::latest()->get()
        ])->extends('layouts.main');
    }
}
