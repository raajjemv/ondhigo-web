<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MenuCartIcon extends Component
{
    public $cartSum;
    protected $listeners = ['cart_updated'];

    public function cart_updated()
    {
        $this->getCartTotal();
    }
    public function mount()
    {
        $this->getCartTotal();
        // Session::flush();
    }
    private function getCartTotal()
    {
        $this->cartSum = collect(Session::get('cart.items'))->count();
    }
    public function render()
    {
        return view('livewire.menu-cart-icon');
    }
}
