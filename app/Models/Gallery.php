<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public function gallery_items()
    {
        return $this->hasMany(GalleryItem::class);
    }
}
