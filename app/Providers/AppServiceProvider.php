<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
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
        Paginator::useBootstrap();

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
        View::share('categories', Category::all());
    }
}
