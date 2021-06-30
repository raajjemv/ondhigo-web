<?php

namespace App\Http\Livewire\Luckydraw;

use Livewire\Component;

class Form extends Component
{
    public $mobile_number;
    protected $rules = [
        'mobile_number' => 'required|min:7|max:7'
    ];
    public function render()
    {
        return view('livewire.luckydraw.form')->extends('layouts.main');
    }
    public function submit()
    {
        $this->validate();
        session()->flash('message', 'Thank you for participating in "Ondhigo NaseebVeriya" giveaway.The draw will live on Ondhigo.mv facebook tomorrow at 1700 hrs and the lucky winner will be announced. ');
        return back();
    }
}
