<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\OtpVerificationMail;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Fungsi untuk registrasi
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Generate OTP dan simpan ke database
        $otp = Str::random(6); // kombinasi huruf & angka
        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(10); // Kadaluarsa OTP 10 menit
        $user->save();

        // Kirim OTP ke email pengguna
        Mail::to($user->email)->send(new OtpVerificationMail($otp));

        return redirect()->route('otp.verify.form');
    }

    // Menampilkan form untuk memasukkan OTP
    public function showOtpForm()
    {
        return view('auth.otp');
    }

    // Fungsi untuk memverifikasi OTP
    public function verifyOtp(Request $request)
{
    $otp = is_array($request->otp) ? implode('', $request->otp) : $request->otp;

    // Validasi format OTP
    if (!preg_match('/^[A-Za-z0-9]{6}$/', $otp)) {
        return redirect()->back()->with('error', 'Invalid OTP format. OTP must be 6 alphanumeric characters.');
    }

    // Cari user berdasarkan OTP dan masa berlaku
    $user = User::where('otp_code', $otp)
                ->where('otp_expires_at', '>', now())
                ->first();

    if (!$user) {
        return redirect()->back()->with('error', 'OTP is invalid or has expired.');
    }

    // Login user
    Auth::login($user);

    // Set email sebagai terverifikasi dan hapus OTP
    $user->email_verified_at = now();     // ✅ Tandai email sebagai sudah diverifikasi
    $user->otp_code = null;
    $user->otp_expires_at = null;
    $user->save();

    return redirect('/')->with('success', 'OTP verified. You are now logged in.');
}


    // Fungsi untuk mengirim ulang OTP
    public function resendOtp(Request $request)
    {
        $user = Auth::user();

        // Generate OTP baru dan simpan
        $otp = Str::random(6);
        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();

        // Kirim OTP baru ke email pengguna
        Mail::to($user->email)->send(new OtpVerificationMail($otp));

        return back()->with('status', 'We have resent the OTP to your email!');
    }

    // Menampilkan halaman login
public function showLoginForm()
{
    return view('auth.login');
}

// Menangani permintaan login
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Jika email belum terverifikasi
        if (!$user->email_verified_at) {
            Auth::logout();
            return redirect()->back()->with('error', 'Please verify your email using the OTP sent before logging in.');
        }

        $request->session()->regenerate();

        // Redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect('/rubick-side-menu-users-layout-2-page')->with('success', 'Logged in as admin.');
        } else {
            return redirect('/home')->with('success', 'Logged in successfully.');
        }
    }

    return back()->withErrors([
        'email' => 'Akun belum terdaftar.',
    ])->onlyInput('email');
}


public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'You have been logged out.');
}

public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|confirmed|min:6',
        'token' => 'required'
    ]);

    $reset = DB::table('password_resets')
        ->where('email', $request->email)
        ->latest('created_at')
        ->first();

    if (!$reset || !Hash::check($request->token, $reset->token)) {
        return back()->withErrors(['email' => 'Invalid or expired reset token.']);
    }

    $user = User::where('email', $request->email)->first();
    $user->password = Hash::make($request->password);
    $user->save();

    DB::table('password_resets')->where('email', $request->email)->delete();

    return redirect()->route('login')->with('success', 'Password successfully reset.');
}

public function showResetForm(Request $request, $token)
{
    $email = $request->query('email');
    return view('auth.editpwusers', ['token' => $token, 'email' => $email]);
}

public function sendResetLink(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $token = Str::random(64);
    DB::table('password_resets')->updateOrInsert(
        ['email' => $request->email],
        [
            'token' => Hash::make($token),
            'created_at' => now(),
        ]
    );

    $resetUrl = route('password.reset', $token) . '?email=' . urlencode($request->email);

    Mail::raw("Click this link to reset your password: $resetUrl", function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('Password Reset Link');
    });

    return back()->with('success', 'We have emailed your password reset link!');
}

public function showForgotPasswordForm()
{
    return view('auth.resetpw');
}

}
