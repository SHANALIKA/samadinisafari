<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    // Redirect the user to the Facebook authentication page
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Handle the callback from Facebook
public function handleFacebookCallback()
{
    try {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        $email = $facebookUser->email ?? ('fbuser_' . $facebookUser->id . '@example.com');

        $user = User::where('facebook_id', $facebookUser->id)->first();

        if (!$user) {
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => $facebookUser->name ?? 'Facebook User',
                    'facebook_id' => $facebookUser->id,
                    'password' => bcrypt('123456dummy'),
                ]
            );
        }

        Auth::login($user);

        return redirect('/booking')->with('success', 'Logged in with Facebook!');
    } catch (\Exception $e) {
        return redirect('/signin')->with('error', 'Facebook login failed: ' . $e->getMessage());
    }
}

}