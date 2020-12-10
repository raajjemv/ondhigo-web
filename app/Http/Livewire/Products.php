<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $search = '';
    public $brand = '';
    public $category = '';
    protected $queryString = ['search', 'brand'];

    public function updatingSearch()
    {
        // $this->resetPage();
    }
    // public function mount($search = null)
    // {
    //     $this->search =  $search;
    // }
    public function render()
    {
        $brand = $this->brand;
        $category = $this->category;
        return view('livewire.products', [
            'products' => Product::with('brand', 'category')
                ->where('name', 'like', '%' . $this->search . '%')
                ->when($brand, function ($query, $brand) {
                    return $query->where('brand_id', $brand);
                })
                ->when($category, function ($query, $category) {
                    return $query->where('category_id', $category);
                })
                ->latest()
                ->paginate(16)
        ])->extends('layouts.main');
    }
}
