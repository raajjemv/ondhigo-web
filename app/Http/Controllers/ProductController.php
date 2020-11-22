<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug, $id)
    {
        $product = Product::where('id', $id)->with('category', 'brand', 'product_images')->first();
        $related_products = Product::where('category_id', $product->category_id)
            ->orwhere('brand_id', $product->brand_id)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(6)
            ->select('id', 'name', 'image', 'slug', 'thumbnail')
            ->get();
        return view('product.show', compact('product', 'related_products'));
    }
}
