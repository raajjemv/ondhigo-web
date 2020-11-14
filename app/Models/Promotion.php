<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($promotion) {
            $promotion->user_id = auth()->user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime'
    ];
}
