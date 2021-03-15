<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

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

    public function render()
    {
        $brand = $this->brand;
        $category = $this->category;
        $brands = Brand::whereHas('products', function (Builder $query) {
            $query->where('name', 'like', '%' . $this->search . '%')->orderBy('name', 'ASC');
        })->when($brand, function ($query, $brand) {
            return $query->where('id', $brand);
        })->get();
        return view('livewire.products', [
            'brands' => $brands
        ])->extends('layouts.main');

        // return view('livewire.products', [
        //     'products' => Product::with('brand', 'category')
        //         ->where('name', 'like', '%' . $this->search . '%')
        //         ->when($brand, function ($query, $brand) {
        //             return $query->where('brand_id', $brand);
        //         })
        //         ->when($category, function ($query, $category) {
        //             return $query->where('category_id', $category);
        //         })
        //         ->latest()
        //         ->paginate(16),
        //     'brands' => Brand::latest()->get(),
        //     'categories' => Category::latest()->get()
        // ])->extends('layouts.main');
    }
}
