<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceShopController extends Controller
{
    public function index()
    {
        // Ambil semua data layanan dari tabel `services`
        $services = Service::all();

        return view('users.service', compact('services'));
    }
}
