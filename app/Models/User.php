<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',          // ✅ tambahkan role
        'profile',       // ✅ tambahkan profile jika ingin bisa diisi secara massal
        'otp_code',      // ✅ tambahkan jika kamu ingin isi OTP via mass assignment
        'otp_expires_at' // ✅ jika juga ingin digunakan
    ];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
