<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $categoryId = $request->query('category_id', null);
        $sortOption = $request->query('sort', 'latest');

        $query = Product::query();

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        $totalProducts = $query->count();

        // Terapkan logika sorting
        switch ($sortOption) {
            case 'oldest':
                $query->oldest();
                break;
            case 'popular':
                $query->orderBy('view', 'desc'); // Paling sering dibuka
                break;
            case 'expensive':
                $query->orderBy('price', 'desc'); // Harga tertinggi
                break;
            case 'cheap':
                $query->orderBy('price', 'asc'); // Harga terendah
                break;
            default:
                $query->latest(); // Default: Terbaru
                break;
        }

        $products = $query->paginate(9);

        return view('users.shop', compact('products', 'categories', 'totalProducts', 'sortOption'));
    }

    public function filterByCategory($id, Request $request)
    {
        $categories = Category::all();

        $sortOption = $request->query('sort', 'latest');

        $query = Product::where('category_id', $id);

        $totalProducts = $query->count(); // Hitung total produk untuk kategori ini

        // Terapkan logika sorting
        switch ($sortOption) {
            case 'oldest':
                $query->oldest();
                break;
            case 'popular':
                $query->orderBy('view', 'desc'); // Paling sering dibuka
                break;
            case 'expensive':
                $query->orderBy('price', 'desc'); // Harga tertinggi
                break;
            case 'cheap':
                $query->orderBy('price', 'asc'); // Harga terendah
                break;
            default:
                $query->latest(); // Default: Terbaru
                break;
        }

        $products = $query->paginate(9);

        // Kirim data ke view
        return view('users.shop', compact('products', 'categories', 'totalProducts', 'sortOption'));
    }
}
