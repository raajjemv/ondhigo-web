<?php

namespace App\Http\Livewire\Luckydraw;

use App\Models\LuckyDraw;
use App\Models\LuckyDrawSetting;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Meta;

class Form extends Component
{
    public $mobile_number, $fb_user, $post;
    protected $rules = [
        'mobile_number' => 'required|min:7|max:7'
    ];
    public function mount()
    {
        $this->post = LuckyDrawSetting::orderBy('id','DESC')->first();
        $token = Session::get('fb_token');
        if ($token) {
            $user = Socialite::driver('facebook')->userFromToken($token);
            $this->fb_user = collect($user);
        }
        Meta::set('title', 'Ondhigo NaseebVeriya Giveaway');
        Meta::set('image', asset('images/lucky-draw/og.png'));
        Meta::set('og:image', asset('images/lucky-draw/og.png'));
        Meta::set('twitter:image', asset('images/lucky-draw/og.png'));
        Meta::set('og:title', 'Ondhigo NaseebVeriya Giveaway');
        Meta::set('twitter:title', 'Ondhigo NaseebVeriya Giveaway');
    }
    public function render()
    {
        return view('livewire.luckydraw.form')->extends('layouts.main');
    }
    public function submit()
    {
        $tomorrow = Carbon::now()->addDay();
        $this->validate();

        $started_date = Carbon::createFromDate('2021-07-01');
        $day_no = $started_date->diffInDays(Carbon::now());

        $today = LuckyDraw::where('number', $this->mobile_number)
            // ->whereDate('created_at', Carbon::today())
            ->where('day_no', $day_no)
            ->first();
        if ($today) {
            return back()->with('duplicate', 'Sorry your number is already in the system!');
        }
        $config = LuckyDrawSetting::latest()->first();

        LuckyDraw::forceCreate([
            'number' => $this->mobile_number,
            'facebook_id' => $this->fb_user['id'],
            'facebook_name' => $this->fb_user['name'],
            'day_no' => $config->day
        ]);


        session()->flash('message', 'Thank you and we appreciate your participation in "Ondhigo NaseebVeriya" giveaway.<br><br>
The giveaway draw will take place live on Ondhigo facebook page tomorrow (' . $tomorrow->format('Y-m-d') . ') at 1700 hrs and the lucky winner will be announced through this live event.<br><br>
Stay with us!');
        return back();
    }
}
