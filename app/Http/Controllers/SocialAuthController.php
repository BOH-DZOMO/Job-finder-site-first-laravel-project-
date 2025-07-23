<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Two\InvalidStateException;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name'              => $socialUser->getName(),
                    'email'             => $socialUser->getEmail(),
                    'password'          => bcrypt($socialUser->getId()),
                ]
            );

            Auth::login($user);

            return redirect()->route('home');
        } catch (InvalidStateException $e) {
            return redirect()->route('login')->with('error', 'Login canceled or failed. Please try again.');
        }
    }
}
