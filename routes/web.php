<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('users.index');
});

Route::get('/home', function () {
    return view('users.index');
});



use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
});



// Menampilkan form input email
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');

// Menangani submit email
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

// Menampilkan form reset password (via link dari email)
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');

// Menangani submit password baru
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/otp', function () {
    return view('auth.otp');
})->name('otp.form');



Route::get('/otp', [AuthController::class, 'showOtpForm'])->name('otp.verify.form');
Route::post('/otp', [AuthController::class, 'verifyOtp'])->name('otp.verify');
Route::post('/otp/resend', [AuthController::class, 'resendOtp'])->name('otp.resend');


// Rute untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');

// Rute untuk menangani proses registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



//rute shop
use App\Http\Controllers\ShopController;

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/category/{id}', [ShopController::class, 'filterByCategory'])->name('shop.category');


use App\Http\Controllers\ShopDetailsController;

Route::get('/shop-details/{id}', [ShopDetailsController::class, 'show'])->name('shop-details');


Route::get('/shop-cart', function () {
    return view('users.shop-cart');
});


use App\Http\Controllers\PublicBlogController;

Route::get('/blogs', [PublicBlogController::class, 'index'])->name('blogs.index');


use App\Http\Controllers\ContactUsersController;

Route::post('/contacts', [ContactUsersController::class, 'store'])->name('contacts.store');



use App\Http\Controllers\PublicBlogDetaildController;

Route::get('/blog/{id}', [PublicBlogDetaildController::class, 'show'])->name('blog.detail');


Route::get('/contact-us', function () {
    return view('users.contact');
});

Route::get('/contact', function () {
    return view('users.contact');
});


use App\Http\Controllers\ServiceShopController;

Route::get('/service', [ServiceShopController::class, 'index'])->name('service.index');
Route::get('/service-details/{id}', function ($id) {
    // Sementara arahkan ke halaman detail
    return "Detail service ID: " . $id;
})->name('service.details');


use App\Http\Controllers\ServiceShopDetailsController;

Route::get('/service-details/{id}', [ServiceShopDetailsController::class, 'show'])->name('service.details');


Route::get('/about', function () {
    return view('users.about');
});







/*
Route admin rubick
*/

use App\Http\Controllers\CategoryController;

Route::prefix('rubick-side-menu-categories-page')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

//rute product
use App\Http\Controllers\ProductController;

Route::get('/rubick-side-menu-product-list-page', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');



use App\Http\Controllers\ServiceController;

Route::get('/rubick-side-menu-service-list-page', [ServiceController::class, 'index'])->name('rubick-side-menu-service-list-page');
Route::get('/services/{id}', [ServiceController::class, 'show']);
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');



Route::get('/rubick-side-menu-dashboard-overview-1-page', function () {
    return view('admin.rubick-side-menu-dashboard-overview-1-page');
});



use App\Http\Controllers\BlogController;

// Rute untuk menampilkan halaman blog
Route::get('/rubick-side-menu-blog-layout-2-page', [BlogController::class, 'index'])->name('blog.index');

// Rute untuk menyimpan blog baru
Route::post('/add-blog', [BlogController::class, 'store'])->name('blog.store');

// Rute untuk memperbarui blog
Route::post('/update-blog', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


use App\Http\Controllers\SidebarShopController;

Route::get('shop/filter', [SidebarShopController::class, 'filter'])->name('sidebarshop.filter');
Route::get('/shop/search', [SidebarShopController::class, 'search'])->name('shop.search');

use App\Http\Controllers\AdminContactUsersController;

Route::get('/rubick-side-menu-contact-us-page', [AdminContactUsersController::class, 'index'])->name('contact-us-page');



use App\Http\Controllers\UsersManegementController;

// Route untuk menampilkan daftar pengguna
Route::get('/rubick-side-menu-users-layout-2-page', [UsersManegementController::class, 'index'])->name('users.index');

// Route untuk menyimpan user baru
Route::post('/create-user', [UsersManegementController::class, 'store'])->name('users.store');

Route::post('/update-user/{id}', [UsersManegementController::class, 'update'])->name('users.update');
Route::put('/update-user/{id}', [UsersManegementController::class, 'update'])->name('users.update');


Route::delete('/users/{id}', [UsersManegementController::class, 'destroy'])->name('users.destroy');

Route::get('/users/{id}', [UsersManegementController::class, 'show'])->name('users.show');


