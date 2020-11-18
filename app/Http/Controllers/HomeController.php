<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LandingPageCover;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Promotion;

class HomeController extends Controller
{
    public function index()
    {
        $landing_page_cover = $this->landing_page_cover();
        $promotion = $this->promotion();
        $featured_products = $this->featured_products();
        $partners = $this->partners();
        return view('welcome', compact('landing_page_cover', 'promotion', 'featured_products', 'partners'));
    }
    public function landing_page_cover()
    {
        return LandingPageCover::latest()->first();
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
        return Product::where('featured', 1)->latest()->take(4)->select('id', 'name', 'slug', 'image')->get();
    }
    public function partners()
    {
        return Partner::latest()->get();
    }
}
