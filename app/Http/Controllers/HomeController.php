<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    // Method untuk halaman home yang menampilkan service
    public function index()
{
    $services = Service::all();
    $categories = Category::take(4)->get(); // Ambil 4 kategori
    $blogs = Blog::latest()->take(3)->get();

    // Ambil produk berdasarkan kategori
    $categoryProducts = [];
    foreach ($categories as $category) {
        $categoryProducts[$category->id] = $category->products()->take(4)->get(); // ambil 4 produk per kategori
    }

    return view('users/index', compact('services', 'blogs', 'categories', 'categoryProducts'));
}

}
