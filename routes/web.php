<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

Route::get('/', [PageController::class, 'getHome'])->name('home');
Route::get('/product_type/{id}', [PageController::class, 'getProductType'])->name('productType');
Route::get('/product/{id}', [PageController::class, 'getProduct'])->name('product');
Route::get('/about', [PageController::class, 'getAbout'])->name('about');
Route::get('/contact', [PageController::class, 'getContact'])->name('contact');
Route::get('/login', [PageController::class, 'getLogin'])->name('login');
Route::get('/signup', [PageController::class, 'getSignUp'])->name('signup');
Route::get('/search', [PageController::class, 'getSearch'])->name('search');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('addToCart');
Route::get('/cart/delete/{id}', [CartController::class, 'destroy'])->name('deleteCart');
Route::get('/cart/update/{$action}/{id}', [CartController::class, 'update'])->name('updateCart');

Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'slide'], function(){
        Route::get('/', [SlideController::class, 'index'])->name('manageSlide');
        Route::get('/add', [SlideController::class, 'create'])->name('addSlide');
        Route::post('/add', [SlideController::class, 'store']);
        Route::get('/update/{id}', [SlideController::class, 'edit'])->name('updateSlide');
        Route::post('/update/{id}', [SlideController::class, 'update']);
        Route::get('/delete/{id}', [SlideController::class, 'destroy'])->name('deleteSlide');
    });
    Route::group(['prefix'=>'product'], function(){
        Route::get('/', [ProductController::class, 'index'])->name('manageProduct');
        Route::get('/add', [ProductController::class, 'create'])->name('addProduct');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('showProduct');
        Route::post('/add', [ProductController::class, 'store']);
        Route::get('/update/{id}', [ProductController::class, 'edit'])->name('updateProduct');
        Route::post('/update/{id}', [ProductController::class, 'update']);
        Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
    });
    Route::group(['prefix'=>'productType'], function(){
        Route::get('/', [ProductTypeController::class, 'index'])->name('manageProductType');
        Route::get('/add', [ProductTypeController::class, 'create'])->name('addProductType');
        Route::get('/show/{id}', [ProductTypeController::class, 'show'])->name('showProductType');
        Route::post('/add', [ProductTypeController::class, 'store']);
        Route::get('/update/{id}', [ProductTypeController::class, 'edit'])->name('updateProductType');
        Route::post('/update/{id}', [ProductTypeController::class, 'update']);
        Route::get('/delete/{id}', [ProductTypeController::class, 'destroy'])->name('deleteProductType');
    });
});
