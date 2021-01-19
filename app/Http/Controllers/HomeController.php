<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\FeaturedVideo;
use App\Models\GalleryItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LandingPageCover;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Promotion;
use Laravel\Fortify\Features;

class HomeController extends Controller
{
    public function index()
    {
        $landing_page_covers = $this->landing_page_covers();
        $landing_page_covers->map(function ($item) {
            $item['image'] = asset('storage/' . $item['image']);
        });
        $landing_page_covers;
        $promotion = $this->promotion();
        $featured_products = $this->featured_products();
        $partners = $this->partners();
        $featured_videos = $this->featured_videos();
        $events = $this->events();
        return view('welcome', compact('landing_page_covers', 'promotion', 'featured_products', 'partners', 'featured_videos', 'events'));
    }
    public function landing_page_covers()
    {
        return LandingPageCover::latest()->take(3)->get();
    }
    public function promotion()
    {
        $now = Carbon::now();
        $query = Promotion::where('start', '<=', $now)
            ->where('end', '>=', $now)
            ->first();
        return $query;
    }
    public function featured_products()
    {
        return Product::where('featured', 1)->latest()->take(4)->select('id', 'name', 'slug', 'image', 'thumbnail')->get();
    }
    public function partners()
    {
        return Partner::latest()->get();
    }
    public function featured_videos()
    {
        return FeaturedVideo::latest()->take(5)->get();
    }
    public function events()
    {
        return Event::latest()->take(3)->get();
    }
    public function galleryShow($id)
    {
        $gallery = GalleryItem::where('gallery_id', $id)->get();
        return view('gallery-show', compact('gallery'));
    }
    public function outlets()
    {
        return view('outlets');
    }
}
