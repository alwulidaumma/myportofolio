<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Models\Product;

// Landing page menampilkan produk dengan pagination
Route::get('/', function () {
    $products = Product::paginate(9); // Paginate produk untuk meningkatkan performa
    return view('landing', compact('products'));
});

// Routes untuk Project (CRUD)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('dashboard.projects.index');
    Route::get('/dashboard/projects/create', [ProjectController::class, 'create'])->name('dashboard.projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('dashboard.projects.store');
    Route::get('/dashboard/projects/{project}/edit', [ProjectController::class, 'edit'])->name('dashboard.projects.edit');
    Route::put('/dashboard/projects/{project}', [ProjectController::class, 'update'])->name('dashboard.projects.update');
    Route::delete('/dashboard/projects/{project}', [ProjectController::class, 'destroy'])->name('dashboard.projects.destroy');
});

// Routes untuk Produk (CRUD)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/products', [ProductController::class, 'index'])->name('dashboard.products.index');

    Route::prefix('dashboard/products')->group(function () {
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/', [ProductController::class, 'store'])->name('products.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
});

// Routes untuk Profil Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include routes untuk autentikasi (register, login, logout)
require __DIR__ . '/auth.php';
