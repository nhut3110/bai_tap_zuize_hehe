<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Products;
use App\Models\Type_products;

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
        view()->composer('header', function($view) {
            $product_type = Type_products::all();
            $view->with('product_type', $product_type);
        });

        view()->composer('page.product_type', function($view) {
            $product_new = Products::where('new', 1)->orderBy('id','DESC')->skip(1)->take(8)->get();
            $view->with('product_new', $product_new);
        });
    }
}
