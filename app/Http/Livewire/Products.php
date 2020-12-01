<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $search = '';
    protected $queryString = ['search'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount($search = null)
    {
        $this->search =  $search;
    }
    public function render()
    {
        return view('livewire.products', [
            'products' => Product::with('brand', 'category')
                ->where('name', 'like', '%' . $this->search . '%')
                ->latest()
                ->paginate(16)
        ])->extends('layouts.main');;
    }
}
