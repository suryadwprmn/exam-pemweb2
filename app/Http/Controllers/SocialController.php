<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    //
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {$googleUser = Socialite::driver('google')->stateless()->user();

        // Find or create a user based on the Google user information
        $user = User::firstOrCreate([
            'email' => $googleUser->getEmail(),
        ], [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
        ]);

        // Login the user
        Auth::login($user, true);

        // Redirect to a desired route
        return redirect()->route('home');
    }
}
