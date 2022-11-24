<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Type_products;
use Illuminate\Support\Facades\Session;

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
        view()->composer('header', function ($view) {
             if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'),
                                                'product_cart' => $cart->items,
                                                'totalPrice' => $cart->totalPrice,
                                                'totalQty' => $cart->totalQty
                                                ]);
                                                }
        });
    }
}
