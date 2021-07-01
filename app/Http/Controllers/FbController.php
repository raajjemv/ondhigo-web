<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class FbController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();

            if ($facebookId) {
                Auth::login($facebookId);
                return redirect('/dashboard');
            } else {
                $token = $user->token;
                Session::put('fb_token', $token);
                // $createUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'facebook_id' => $user->id,
                //     'password' => encrypt($user->email)
                // ]);

                // Auth::login($createUser);
                return redirect('/naseebveriya');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
    public function user()
    {
        $token = Session::get('fb_token');
        $user = Socialite::driver('facebook')->userFromToken($token);
        dd($user);
    }
}
