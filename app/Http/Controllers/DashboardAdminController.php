<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Contact; 
use Carbon\Carbon;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // === User ===
        $totalUsers = User::count();
        $activeUsers = User::where('updated_at', '>=', Carbon::now()->subMinutes(10))->count();

        // === Product ===
        $totalProducts = Product::count();
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subMinutes(5))->count();

        // === Blog ===
        $totalBlogs = Blog::count();
        $newBlogs = Blog::where('created_at', '>=', Carbon::now()->subMinutes(5))->count();

        // === Contact ===
        $totalContacts = Contact::count();
        $newContacts = Contact::where('created_at', '>=', Carbon::now()->subMinutes(5))->count();

        return view('admin.rubick-side-menu-dashboard-overview-1-page', compact(
            'totalUsers',
            'activeUsers',
            'totalProducts',
            'newProducts',
            'totalBlogs',
            'newBlogs',
            'totalContacts',
            'newContacts'
        ));
    }

    
}
