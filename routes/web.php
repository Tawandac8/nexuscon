<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::post('/admin/products/add',[ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/products/edit/{product}', [ProductController::class, 'edit']);
    Route::post('/admin/products/update/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
});

require __DIR__.'/auth.php';
