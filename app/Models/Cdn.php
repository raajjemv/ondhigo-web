<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cdn extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($cdn) {
            if (Auth::check())
                $cdn->user_id = auth()->user()->id;
        });
        static::updating(function ($cdn) {
            if (Auth::check())
                $cdn->user_id = auth()->user()->id;
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
