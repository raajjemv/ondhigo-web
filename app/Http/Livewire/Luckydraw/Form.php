<?php

namespace App\Http\Livewire\Luckydraw;

use Carbon\Carbon;
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
        $tomorrow = Carbon::now()->addDay();
        $this->validate();
        session()->flash('message', 'Thank you and we appreciate your participation in "Ondhigo NaseebVeriya" giveaway.<br><br>
The giveaway draw will take place live on Ondhigo facebook page tomorrow (specify date) at 1700 hrs and the lucky winner will be announced through this live event.<br><br>
Stay with us!');
        return back();
    }
}
