<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($brand) {
            $brand->user_id = auth()->user()->id;
            $brand->slug = Str::slug($brand->name, '-');
        });
        static::updating(function ($brand) {
            $brand->slug = Str::slug($brand->name, '-');
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
