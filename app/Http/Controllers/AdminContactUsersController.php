<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;

class AdminContactUsersController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel contacts
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            if ($contact->location) {
                // Ambil alamat deskriptif dari koordinat
                $contact->formatted_address = $this->getAddressFromCoordinates($contact->location);
            } else {
                $contact->formatted_address = 'Alamat tidak tersedia';
            }
        }

        return view('admin.rubick-side-menu-contact-us-page', compact('contacts'));
    }

    private function getAddressFromCoordinates($coordinates)
    {
        $latLon = explode(',', $coordinates);
        $latitude = $latLon[0] ?? null;
        $longitude = $latLon[1] ?? null;
    
        if (!$latitude || !$longitude) {
            return 'Koordinat tidak valid';
        }
    
        // Request ke API Nominatim
        $response = Http::get('https://nominatim.openstreetmap.org/reverse', [
            'format' => 'json',
            'lat' => $latitude,
            'lon' => $longitude,
            'addressdetails' => 1,
        ]);
    
        // Debug respons untuk memastikan data tersedia
        $responseBody = $response->json();
    
        // Menambahkan log dengan benar
        \Log::info('Response from OpenStreetMap API:', ['response' => $responseBody]);  // Menambahkan array sebagai context
    
        if ($response->successful() && isset($responseBody['address'])) {
            $address = $responseBody['address'];
    
            // Ambil elemen yang diperlukan
            $road = $address['road'] ?? 'Jalan tidak diketahui';
            $village = $address['village'] ?? 'Desa tidak diketahui';
            $city = $address['city'] ?? $address['city_district'] ?? 'Kota tidak diketahui';
            $postcode = $address['postcode'] ?? 'Kode pos tidak diketahui';
            $country = $address['country'] ?? 'Negara tidak diketahui';
    
            // Format alamat deskriptif
            return "$road, $village, $city, $postcode, $country";
        }
    
        return 'Alamat tidak ditemukan';
    }
    


}

