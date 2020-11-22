<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalAlert extends Component
{
    public $visible = false;
    public $message = false;
    public $size;
    public $bgColor;
    protected $listeners = ['openModal', 'closeModal'];

    public function mount($message = "", $size)
    {
        $this->message = $message;
        $this->size = $size;
    }
    public function closeModal()
    {
        $this->visible = false;
    }
    public function openModal($payload)
    {
        $this->message = $payload[0];
        $this->bgColor = $payload[1];
        $this->visible = true;
    }

    public function render()
    {
        return view('livewire.modal-alert');
    }
}
