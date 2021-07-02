<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuckyDraw;
use App\Models\LuckyDrawSetting;

class LuckyDrawController extends Controller
{
    public function index()
    {
        $config = LuckyDrawSetting::latest()->first();
        $numbers = LuckyDraw::latest()->where('day_no', $config->day)->get()->pluck('number');
        return view('luckydraw.roller', compact('numbers'));
    }
    public function naseebveriya()
    {
        return view('lucky-drawer.form');
    }
}
