<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SidebarShopController extends Controller
{
    public function filter(Request $request)
    {
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 10000);

        // Validasi harga
        if ($minPrice > $maxPrice) {
            return redirect()->back()->withErrors(['message' => 'Harga minimum tidak boleh lebih besar dari harga maksimum.']);
        }

        // Query produk berdasarkan harga
        $products = Product::whereBetween('price', [$minPrice, $maxPrice])
            ->orderBy('price', 'asc')
            ->paginate(10);

        // Data pendukung
        $categories = Category::orderBy('id', 'asc')->get();
        $totalProducts = Product::count();
        $sortOption = $request->input('sort', 'default');

        return view('users.shop', compact('products', 'minPrice', 'maxPrice', 'categories', 'totalProducts', 'sortOption'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => 'nullable|string|max:255',
        ]);

        $keyword = $request->input('keyword');
        $products = Product::where('product_name', 'LIKE', "%{$keyword}%")->paginate(9);
        $categories = Category::all();
        $totalProducts = Product::count();
        $sortOption = $request->input('sort', 'default');

        return view('users.shop', compact('products', 'categories', 'keyword', 'totalProducts', 'sortOption'));
    }
}
