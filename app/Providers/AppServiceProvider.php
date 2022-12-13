<?php

namespace App\Providers;

use App\Models\Product_type;
use Illuminate\Support\ServiceProvider;
use App\Models\Slide;
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
        $slides = Slide::all();
        $productTypes = Product_type::all();
        View::share('slides', $slides);
        View::share('productTypes', $productTypes);
    }
}
