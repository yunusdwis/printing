<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Cari user berdasarkan email, kalau tidak ada, buat baru
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(Str::random(16)), // Password random
                    'email_verified_at' => now(),
                ]);
            }

            Auth::login($user);

            return redirect('/')->with('success', 'Berhasil login dengan Google');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Login dengan Google gagal.');
        }
    }
}
