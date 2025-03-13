<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Mengambil semua kategori
        $categories = Category::all();

        return view('admin.rubick-side-menu-categories-page', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Menyimpan kategori baru
        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Cari kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Update data kategori
        $category->update([
            'category_name' => $request->category_name,
        ]);

        return response()->json(['success' => true, 'message' => 'Category updated successfully!']);
    }

    public function destroy(Category $category)
    {
        // Menghapus kategori
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
