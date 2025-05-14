<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('users.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user(); // Ambil user yang sedang login
    
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:8',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // Simpan ke kolom 'name' sesuai isi dari field username
        $user->name = $request->username;
        $user->email = $request->email;
    
        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        if ($request->hasFile('profile_picture')) {
            if ($user->profile && Storage::disk('public')->exists($user->profile)) {
                Storage::disk('public')->delete($user->profile);
            }
        
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile = $path;
        }
        
    
        $user->save();
    
        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }
    
    
}

