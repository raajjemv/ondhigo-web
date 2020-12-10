<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cart_items;
    public $show = 0;
    public $total = 0;
    public function mount()
    {
        $this->cart_items = Session::get('cart.items');
        $this->cartTotal();
    }
    public function cartTotal()
    {
        $total = collect($this->cart_items)->map(function ($item) {
            return $item->price;
        });
        $this->total = number_format($total->sum(), 2);
        // return number_format($total->sum(), 2);
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
