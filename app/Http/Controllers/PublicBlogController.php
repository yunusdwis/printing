<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
    public function index(Request $request)
{
    // Ambil parameter pencarian atau tag
    $search = $request->input('q');
    $tag = $request->input('tag');

    // Query blog berdasarkan pencarian judul atau tag (jika ada)
    $blogs = Blog::when($search, function ($query, $search) {
        $query->where('judul', 'like', '%' . $search . '%');
    })
    ->when($tag, function ($query, $tag) {
        $query->whereJsonContains('tag', $tag); // Filter berdasarkan tag
    })
    ->orderBy('created_at', 'desc')
    ->paginate(2);

    // Ambil 3 blog terbaru untuk Recent Post
    $recentPosts = Blog::orderBy('created_at', 'desc')->take(3)->get();

    // Ambil tag populer berdasarkan view
    $popularTags = Blog::whereNotNull('tag')
        ->selectRaw('JSON_EXTRACT(tag, "$[*]") as tags, SUM(view) as total_views')
        ->groupBy('tags')
        ->orderByDesc('total_views')
        ->limit(10)
        ->get()
        ->flatMap(function ($item) {
            return collect(json_decode($item->tags))->map(fn($tag) => ['tag' => $tag, 'total_views' => $item->total_views]);
        })
        ->unique('tag');

    // Kirim data ke view
    return view('users.news', compact('blogs', 'recentPosts', 'search', 'popularTags', 'tag'));
}

}





