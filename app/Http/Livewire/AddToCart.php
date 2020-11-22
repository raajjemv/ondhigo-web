<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public $quantity = 1;
    public $available;
    public $modalType;

    public function mount($product)
    {
        // Session::flush();
        $this->product = $product;
        $this->available = $product->quantity;
    }

    public function increment()
    {
        $this->emit('closeModal');
    }
    public function addToCart()
    {
        $quantity_exist = collect(Session::get('cart.items'))->where('id', $this->product->id)->count();
        if ($this->quantity > $this->available || $quantity_exist > $this->available) {
            $this->emit('openModal', [$quantity_exist . ' Oops sorry, we have only ' . $this->available . ' items left!', 'bg-red-500']);
            return;
        }

        for ($i = 1; $i <= $this->quantity; $i++) {
            Session::push('cart.items', $this->product);
        }

        $this->quantity = 1;
        $this->emit('itemAdded');
        $this->emit('cart_updated');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
