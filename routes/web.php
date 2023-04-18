<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SlideController as AdminSlideController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admins.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('customers.home');
})->name('home');

Route::get('/about', function () {
    return view('customers.about');
})->name('about');

Route::get('/contact', function () {
    return view('customers.contact');
})->name('contact');

Route::get('/login', function () {
    return view('customers.login');
})->name('login');

Route::get('/sign_up', function () {
    return view('customers.sign_up');
})->name('sign_up');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::prefix('admin')->group(function () {
    // Route::resource('product', AdminProductController::class)->except('show');
    // Route::resource('slide', AdminProductController::class)->except('show');
    // Route::resource('category', AdminProductController::class)->except('show');
    Route::prefix('product')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('product.index');
        Route::get('/create', [AdminProductController::class, 'create'])->name('product.create');
        Route::post('/', [AdminProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/edit', [AdminProductController::class, 'edit'])->name('product.edit');
        Route::put('/{id}', [AdminProductController::class, 'update'])->name('product.update');
        Route::delete('/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('category.create');
        Route::post('/', [AdminCategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}/edit', [AdminCategoryController::class, 'edit'])->name('category.edit');
        Route::put('/{id}', [AdminCategoryController::class, 'update'])->name('category.update');
        Route::delete('/{id}', [AdminCategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('slide')->group(function () {
        Route::get('/', [AdminSlideController::class, 'index'])->name('slide.index');
        Route::get('/create', [AdminSlideController::class, 'create'])->name('slide.create');
        Route::post('/', [AdminSlideController::class, 'store'])->name('slide.store');
        Route::get('/{id}/edit', [AdminSlideController::class, 'edit'])->name('slide.edit');
        Route::put('/{id}', [AdminSlideController::class, 'update'])->name('slide.update');
        Route::delete('/{id}', [AdminSlideController::class, 'destroy'])->name('slide.destroy');
    });
});