<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->user_id = auth()->user()->id;
            $product->slug = Str::slug($product->name, '-');
        });
        static::updating(function ($product) {
            $product->slug = Str::slug($product->name, '-');
        });
    }
    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
