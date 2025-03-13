<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceShopDetailsController extends Controller
{
    /**
     * Menampilkan detail layanan.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Mengambil data layanan berdasarkan id
        $service = Service::findOrFail($id);

        // Menampilkan halaman detail layanan
        return view('users.service-details', compact('service'));
    }
}
