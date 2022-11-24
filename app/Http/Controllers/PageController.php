<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Slide;
use App\Models\Products;
use App\Models\Type_products;
use App\Models\Comment;
use App\Models\Cart;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Products::where('new',1)->paginate(5);
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
    public function getProductDetail(Request $request){
        $product = Products::where('id',$request->id)->first();
        $related_product = Products::where('id', '<>', $product->id, 'and', 'id_type', '=', $product->id_type)->paginate(3);
        $comments = Comment::where('id_product', $request->id)->get();
        return view('page.product_detail', compact('product', 'related_product', 'comments'));
    }
    public function getContact(){
        return view('page.contact');
    }
    public function getAbout(){
        return view('page.about');
    }

    public function getAddToCart(Request $req, $id){
        $product = ProductS::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
}
