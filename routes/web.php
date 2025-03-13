<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
});

Route::get('/home', function () {
    return view('users.index');
});

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
