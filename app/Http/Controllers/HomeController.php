<?php

namespace App\Http\Controllers;

use App\Models\LandingPageCover;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $landing_page_cover = $this->landing_page_cover();
        return view('welcome', compact('landing_page_cover'));
    }
    public function landing_page_cover()
    {
        return LandingPageCover::latest()->first();
    }
}
