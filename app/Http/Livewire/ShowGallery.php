<?php

namespace App\Http\Livewire;

use App\Models\GalleryItem;
use Livewire\Component;

class ShowGallery extends Component
{
    public $gallery_id;
    public function mount($id)
    {
        $this->gallery_id = $id;
    }
    public function render()
    {
        return view('livewire.show-gallery', [
            'gallery' => GalleryItem::where('gallery_id', $this->gallery_id)->get()
        ])->extends('layouts.main');
    }
}
