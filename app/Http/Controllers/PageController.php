<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slide;
use App\Models\Products;
use App\Models\Type_products;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Products::where('new',1)->paginate(8);
        $top_product = Products::where('promotion_price','<>',0)->paginate(4);
        return view('page.homepage', compact('slide','new_product', 'top_product'));
    }

    public function getProductType($type){
        $type_name = Type_products::where('id',$type)->first();
        $types = Type_products::all();
        $type_product = Products::all();
        $product_filter = Products::where('id_type',$type)->get();
        $suggestion = Products::where('id_type', '<>', $type)->take(3)->get();
        return view('page.product_type', compact( 'type_name','types','type_product', 'product_filter', 'suggestion'));
    }
    public function getProductDetail(){
        return view('page.product_detail');
    }
    public function getContact(){
        return view('page.contact');
    }
    public function getAbout(){
        return view('page.about');
    }
}
