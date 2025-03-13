<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{
    public function show($id)
    {
        // Ambil data produk berdasarkan ID untuk detail
        $product = Product::with('category')->findOrFail($id);

        // Ambil semua produk untuk tab
        $products = Product::all();

         // Tambahkan 1 ke kolom view
         $product->increment('view');

        // Kirim data ke view
        return view('users.shop-details', compact('product', 'products'));
    }
}

