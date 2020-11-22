<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductImages extends Component
{
    public $default_cover;
    public $cover;
    public $product_images;

    public function mount($cover, $product_images)
    {
        $this->default_cover = $cover;
        $this->cover = $cover;
        $this->product_images = $product_images;
    }
    public function render()
    {
        return view('livewire.product-images');
    }
}
