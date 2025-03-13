<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter pencarian
        $search = $request->input('q');

        // Query blog berdasarkan pencarian judul (jika ada)
        $blogs = Blog::when($search, function ($query, $search) {
            $query->where('judul', 'like', '%' . $search . '%');
        })->orderBy('created_at', 'desc')->paginate(2);

        // Ambil 3 blog terbaru untuk Recent Post
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(3)->get();

        // Kirim data ke view
        return view('users.news', compact('blogs', 'recentPosts', 'search'));
    }
}


