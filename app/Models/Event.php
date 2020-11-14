<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            $event->user_id = auth()->user()->id;
            $event->slug = Str::slug($event->name, '-');
        });
        static::updating(function ($event) {
            $event->slug = Str::slug($event->name, '-');
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
