<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slide;
use App\Models\Products;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Products::where('new',1)->get();
        return view('page.homepage', compact('slide','new_product'));
    }

    public function getProductType(){
        return view('page.product_type');
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
