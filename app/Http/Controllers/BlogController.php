<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        // Ambil semua data blog dari database
        $blogs = Blog::all();

        // Kirim data ke view
        return view('admin.rubick-side-menu-blog-layout-2-page', compact('blogs'));
    }

    public function store(Request $request)
{
    // Validasi data
    $validatedData = $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'judul' => 'required|string|max:255',
        'isi_blog' => 'required',
        'motivasi' => 'nullable|string|max:255',
        'tag' => 'nullable|string',
        'like' => 'nullable|integer|min:0',
        'comment' => 'nullable|integer|min:0',
        'view' => 'nullable|integer|min:0',
    ]);

    // Simpan file gambar ke direktori storage
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('blog_images', 'public');
        $validatedData['gambar'] = $gambarPath;
    }

    // Konversi tag menjadi format JSON
    if (!empty($validatedData['tag'])) {
        $validatedData['tag'] = json_encode(array_map('trim', explode(',', $validatedData['tag'])));
    }

    // Tambahkan nilai default jika kosong
    $validatedData['like'] = $validatedData['like'] ?? 0;
    $validatedData['comment'] = $validatedData['comment'] ?? 0;
    $validatedData['view'] = $validatedData['view'] ?? 0;

    // Simpan data ke database
    Blog::create($validatedData);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Blog berhasil ditambahkan.');
}

public function update(Request $request)
{
    $validatedData = $request->validate([
        'blogId' => 'required|exists:blog,id',
        'editJudul' => 'required|string|max:255',
        'editIsiBlog' => 'required|string',
        'editGambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'editTag' => 'nullable|string',
    ]);

    $blog = Blog::findOrFail($validatedData['blogId']);

    $blog->judul = $validatedData['editJudul'];
    $blog->isi_blog = $validatedData['editIsiBlog'];
    $blog->tag = $validatedData['editTag'] 
        ? json_encode(array_map('trim', explode(',', $validatedData['editTag'])))
        : $blog->tag;

    if ($request->hasFile('editGambar')) {
        if ($blog->gambar) {
            Storage::disk('public')->delete($blog->gambar);
        }
        $blog->gambar = $request->file('editGambar')->store('blog_images', 'public');
    }

    $blog->save();

    return redirect()->back()->with('success', 'Blog berhasil diperbarui.');
}



public function destroy($id)
{
    // Cari blog berdasarkan ID
    $blog = Blog::findOrFail($id);

    // Hapus file gambar jika ada
    if ($blog->gambar) {
        Storage::disk('public')->delete($blog->gambar);
    }

    // Hapus data blog dari database
    $blog->delete();

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Blog berhasil dihapus.');
}



}
