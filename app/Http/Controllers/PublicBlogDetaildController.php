<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PublicBlogDetaildController extends Controller
{
    /**
     * Menampilkan halaman detail blog.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
{
    // Ambil data blog berdasarkan ID
    $blog = Blog::findOrFail($id);

    // Tambahkan jumlah view pada blog
    $blog->increment('view');

    // Ambil 3 blog terbaru
    $recentBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

    // Decode tag dari JSON ke array
    $tags = json_decode($blog->tag, true) ?? [];

    // Kembalikan ke view detail blog dengan data blog, recent blogs, dan tags
    return view('users.news-details', compact('blog', 'recentBlogs', 'tags'));
}

}

