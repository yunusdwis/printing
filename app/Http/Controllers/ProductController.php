<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil produk beserta nama kategori
        $products = Product::with('category')->get();

        // Ambil semua kategori untuk dropdown
        $categories = Category::all();

        return view('admin.rubick-side-menu-product-list-page', compact('products', 'categories'));
    }

    public function edit($id)
    {
        // Cari produk berdasarkan ID dan ambil kategori
        $product = Product::with('category')->findOrFail($id);

        // Ambil semua kategori untuk dropdown
        $categories = Category::all();

        return response()->json([
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'tag' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    Product::create($validatedData);

    return redirect()->route('products.index')->with('success', 'Product added successfully.');
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
        'tag' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        
    ]);

    $product = Product::findOrFail($id);

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    $product->update($validatedData);

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


    public function destroy(Product $product)
    {
        // Menghapus produk
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
