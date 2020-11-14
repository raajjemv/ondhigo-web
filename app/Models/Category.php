<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            $category->user_id = auth()->user()->id;
            $category->slug = Str::slug($category->name, '-');
        });
        static::updating(function ($category) {
            $category->slug = Str::slug($category->name, '-');
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
