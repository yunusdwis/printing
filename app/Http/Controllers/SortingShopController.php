<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SortingShopController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan ID kategori dari request (atau bisa hardcoded)
        $categoryId = $request->query('category_id', null);

        // Mendapatkan metode sorting
        $sortOption = $request->query('sort', 'default');

        // Query produk berdasarkan kategori
        $query = Product::where('category_id', $categoryId);

        // Hitung jumlah total produk di kategori
        $totalProducts = $query->count();

        // Terapkan sorting
        switch ($sortOption) {
            case 'popularity':
                $query->orderBy('view', 'desc'); // Contoh sorting popularitas
                break;
            case 'rating':
                $query->orderBy('average_rating', 'desc'); // Pastikan ada kolom rata-rata rating
                break;
            case 'latest':
                $query->latest();
                break;
            default:
                $query->orderBy('id'); // Default sorting
                break;
        }

        // Paginate produk
        $products = $query->paginate(12);

        return view('shop.index', [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'sortOption' => $sortOption,
        ]);
    }
}
