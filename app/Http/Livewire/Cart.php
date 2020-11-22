<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cart_items;
    public function mount()
    {
        $this->cart_items = Session::get('cart.items');
    }
    public function removeItem($index)
    {
        $collection = Session::get('cart.items');
        unset($collection[$index]);
        // dd($collection);
        Session::forget('cart.items');
        collect($collection)->map(function ($item) {
            Session::push('cart.items', $item);
        });
        $this->cart_items = Session::get('cart.items');
    }


    public function render()
    {
        return view('livewire.cart')->extends('layouts.main');
    }
}
