<?php

namespace App\Http\Livewire;

use App\Models\Event as ModelsEvent;
use Livewire\Component;

class Event extends Component
{
    public $slug;
    public $event_id;

    public function mount($slug, $id)
    {
        $this->slug = $slug;
        $this->event_id = $id;
    }
    public function render()
    {
        return view('livewire.event', [
            'event' => ModelsEvent::where('slug', $this->slug)->where('id', $this->event_id)->first()
        ])->extends('layouts.main');
    }
}
