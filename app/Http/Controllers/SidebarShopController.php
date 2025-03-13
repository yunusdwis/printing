<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SidebarShopController extends Controller
{
    public function filter(Request $request)
    {
        // Logika filter produk berdasarkan rentang harga (seperti yang sudah ada)
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 10000);

        if ($minPrice > $maxPrice) {
            return redirect()->back()->withErrors(['message' => 'Harga minimum tidak boleh lebih besar dari harga maksimum.']);
        }

        $products = Product::whereBetween('price', [$minPrice, $maxPrice])
            ->orderBy('price', 'asc')
            ->paginate(10);

        $categories = Category::orderBy('id', 'asc')->get();

        return view('users.shop', compact('products', 'minPrice', 'maxPrice', 'categories'));
    }

    public function search(Request $request)
    {
        // Ambil kata kunci pencarian dari input form
        $keyword = $request->input('keyword');

        // Query produk berdasarkan nama produk yang mengandung kata kunci
        $products = Product::where('product_name', 'LIKE', "%{$keyword}%")->paginate(9);

        // Ambil semua kategori untuk sidebar
        $categories = Category::all();

        // Kirim data ke view
        return view('users.shop', compact('products', 'categories', 'keyword'));
    }
}
