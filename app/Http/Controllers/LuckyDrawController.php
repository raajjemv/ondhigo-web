<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuckyDraw;

class LuckyDrawController extends Controller
{
    public function index()
    {
        $numbers = LuckyDraw::latest()->get()->pluck('number');
        return view('luckydraw.roller', compact('numbers'));
    }
    public function naseebveriya()
    {
        return view('lucky-drawer.form');
    }
}
