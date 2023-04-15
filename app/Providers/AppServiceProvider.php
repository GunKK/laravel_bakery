<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Product_type;
use Illuminate\Support\ServiceProvider;
use App\Models\Slide;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
        // $slides = Slide::all();
        // $productTypes = Product_type::all();

        // view()->composer(['Frontend.Layouts.header', 'Frontend.Pages.shopping_cart', 'Frontend.Pages.checkout'], function($view) {
        //     if (Session::has('cart')) {
        //         $oldCart = Session::get('cart');
        //         $cart = new Cart($oldCart);
        //         $view->with([
        //                     'cart' => Session::get('cart'),
        //                     'items' => $cart->items,
        //                     'totalPrice' => $cart->totalPrice, 
        //                     'totalQty' => $cart->totalQty
        //                 ]);
        //     }
        // });
        // View::share('slides', $slides);
        // View::share('productTypes', $productTypes);
    }
}
