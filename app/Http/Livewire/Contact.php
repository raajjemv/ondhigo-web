<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $message;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required'
    ];
    public function submit()
    {
        $this->validate();
        Message::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'message' => $this->message
        ]);
        session()->flash('message', 'Thank you, we have received your message and will contact you soon.');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.contact')->extends('layouts.main');
    }
}
