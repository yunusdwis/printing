<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersManegementController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.rubick-side-menu-users-layout-2-page', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'profile' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:user,admin',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Buat user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now(); // ✅ tandai email sudah diverifikasi
    
        // Simpan gambar profil jika ada
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_images', $filename);
            $user->profile = 'storage/profile_images/' . $filename;
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $validator = Validator::make($request->all(), [
            'edit-profile-img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'edit-name' => 'required|string|max:255',
            'edit-email' => 'required|email|unique:users,email,' . $user->id,
            'edit-role' => 'required|in:user,admin',
            'edit-password' => 'nullable|string|min:8',
            'edit-confirm-password' => 'same:edit-password',
        ]);
        
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }
    
        $user->name = $request->input('edit-name');
        $user->email = $request->input('edit-email');
        $user->role = $request->input('edit-role');
    
        if ($request->filled('edit-password')) {
            $user->password = Hash::make($request->input('edit-password'));
        }
    
        if ($request->hasFile('edit-profile-img')) {
            $file = $request->file('edit-profile-img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_images', $filename);
            $user->profile = 'storage/profile_images/' . $filename;
        }
    
        $user->save();
    
        return response()->json(['success' => true]);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
    
        // Jika ada gambar profil, hapus dari penyimpanan
        if ($user->profile) {
            $profilePath = str_replace('storage/', 'public/', $user->profile);
            if (\Storage::exists($profilePath)) {
                \Storage::delete($profilePath);
            }
        }
    
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'email_verified_at' => $user->email_verified_at ? $user->email_verified_at->format('Y-m-d') : 'Belum diverifikasi',
            'created_at' => $user->created_at->format('Y-m-d H:i'),
            'updated_at' => $user->updated_at->format('Y-m-d H:i'),
            'profile' => $user->profile ? asset($user->profile) : null,
        ]);
    }
    
    
}

