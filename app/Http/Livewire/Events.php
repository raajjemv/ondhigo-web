<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        return view('livewire.events', [
            'events' => Event::latest()->get()
        ])->extends('layouts.main');
    }
}
