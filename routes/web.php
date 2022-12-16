<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
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

Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'slide'], function(){
        Route::get('/', [SlideController::class, 'index'])->name('slide');
        Route::get('/add', [SlideController::class, 'create'])->name('addSlide');
        Route::post('/add', [SlideController::class, 'store']);
        Route::get('/update/{id}', [SlideController::class, 'edit'])->name('updateSlide');
        Route::post('/update/{id}', [SlideController::class, 'update']);
        Route::get('/delete/{id}', [SlideController::class, 'destroy'])->name('deleteSlide');
    });
});
