<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function respond(Request $request)
    {
        $message = strtolower($request->input('message'));

        // Tangani perintah hapus pesan
        if (in_array($message, ['clear pesan', 'hapus pesan', 'bersihkan pesan'])) {
            return response()->json(['reply' => '[CLEAR_CHAT]']);
        }

        $greetings = ['halo', 'hi', 'hai', 'hey', 'selamat pagi', 'selamat siang', 'selamat sore', 'selamat malam'];

        $response = "Maaf, saya belum memahami pertanyaan itu ya.";

        $containsAny = function ($message, array $keywords) {
            foreach ($keywords as $word) {
                if (str_contains($message, $word)) {
                    return true;
                }
            }
            return false;
        };

        foreach ($greetings as $greet) {
            if (str_contains($message, $greet)) {
                $response = "Halo! Ada yang bisa saya bantu?";
                break;
            }
        }

        if ($response === "Maaf, saya belum memahami pertanyaan itu ya.") {
            // Profil
            if (
                $containsAny($message, ['profile', 'akun', 'profil', 'account', 'edit akun', 'edit profile', 'ubah akun']) &&
                $containsAny($message, ['bagaimana', 'dimana', 'lihat', 'edit', 'ubah', 'cek', 'akses', 'mengakses'])
            ) {
                $response = "Anda dapat menekan icon profil di bagian header atau langsung buka URL ini: <a href='http://127.0.0.1:8000/profile'>http://127.0.0.1:8000/profile</a>.";
            }

            // Blog
            elseif (
                $containsAny($message, ['blog', 'artikel']) &&
                $containsAny($message, ['bagaimana', 'cara', 'dimana', 'melihat', 'baca', 'akses'])
            ) {
                $response = "Anda dapat menekan menu Blog pada halaman header atau langsung ke URL ini: <a href='http://127.0.0.1:8000/blogs'>http://127.0.0.1:8000/blogs</a>.";
            }

            // Kontak admin
            elseif (
                $containsAny($message, ['admin', 'kontak', 'hubungi', 'contact']) &&
                $containsAny($message, ['bagaimana', 'cara', 'menghubungi', 'hubungi', 'mengontak'])
            ) {
                $response = "Anda dapat ke menu Contact Us di bagian header atau Anda dapat menekan URL ini: <a href='http://127.0.0.1:8000/contact'>http://127.0.0.1:8000/contact</a>.";
            }

            // Kontak cepat admin
            elseif (
                $containsAny($message, ['menghubungi admin cepat', 'hubungi admin cepat', 'kontak admin cepat', 'butuh admin cepat', 'admin segera', 'hubungi admin segera'])
            ) {
                return response()->json([
                    'reply' => "Anda dapat ke menu Contact Us di bagian header atau Anda dapat menekan URL ini: http://127.0.0.1:8000/contact.",
                    'reply2' => "Jika ingin menghubungi admin segera, Anda dapat menekan WhatsApp ini: https://wa.me/081336589373"
                ]);
            }

            // Keluhan
            elseif (
                $containsAny($message, ['lapor', 'keluhan', 'komplain', 'masalah', 'mengadu', 'pengaduan', 'melapor', 'buat laporan']) &&
                $containsAny($message, ['dimana', 'bagaimana', 'bisa', 'cara', 'saya ingin', 'membuat', 'buat', 'isi'])
            ) {
                $response = "Untuk melaporkan keluhan atau masalah, silakan isi formulir di <a href='http://127.0.0.1:8000/contact'>halaman kontak</a>.";
            }

            // Layanan
            elseif (
                $containsAny($message, ['layanan', 'service', 'jasa', 'pelayanan']) &&
                $containsAny($message, ['bagaimana', 'cara', 'dimana', 'melihat', 'baca', 'akses', 'tahu', 'ingin lihat', 'tampilkan', 'tanyakan', 'apa saja'])
            ) {
                $response = "Anda dapat ke menu Service pada bagian header atau Anda dapat menekan URL ini: <a href='http://127.0.0.1:8000/service'>http://127.0.0.1:8000/service</a>.";
            }

            // Produk / toko / pembayaran
            else {
                $lokasiKeywords = ['dimana', 'bagian', 'tempat', 'lokasi', 'ke mana', 'cara', 'dapat', 'di mana', 'mana'];
                $aksiKeywords = ['lihat', 'melihat', 'cari', 'temukan', 'dapat', 'bisa', 'mau'];
                $produkKeywords = ['produk', 'product', 'baju', 'barang', 'item'];

                $lokasiMatch = $containsAny($message, $lokasiKeywords);
                $aksiMatch = $containsAny($message, $aksiKeywords);
                $produkMatch = $containsAny($message, $produkKeywords);

                $matchCount = ($lokasiMatch ? 1 : 0) + ($aksiMatch ? 1 : 0) + ($produkMatch ? 1 : 0);

                if ($matchCount >= 2) {
                    $response = "Anda dapat ke bagian header dan memilih menu Shop atau langsung buka <a href='http://127.0.0.1:8000/shop'>http://127.0.0.1:8000/shop</a>.";
                } elseif (str_contains($message, 'produk') || str_contains($message, 'baju')) {
                    $response = "Kamu bisa melihat semua produk kami di halaman <a href='/shop'>Toko</a>.";
                } elseif (str_contains($message, 'bayar') || str_contains($message, 'pembayaran')) {
                    $response = "Setelah memilih produk, kamu bisa lanjut ke <a href='/shop-cart'>keranjang</a> dan lanjut checkout.";
                } elseif (str_contains($message, 'keranjang') || str_contains($message, 'cart')) {
                    $response = "Kamu bisa membuka <a href='/shop-cart'>keranjang belanja</a> kamu di sini.";
                } elseif (str_contains($message, 'blog') || str_contains($message, 'artikel')) {
                    $response = "Kamu bisa membaca blog kami di halaman <a href='/blogs'>Blog</a>.";
                }
            }
        }

        return response()->json(['reply' => $response]);
    }
}
