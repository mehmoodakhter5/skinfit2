<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class Main extends Controller
{
    public function index(){
        $featured = DB::table('product')->where('product_status','true')->where('product_active','true')->where('product_featured',true)->limit(100)->orderBy('id','DESC')->get();
        $title=NULL;
        return view('front.index',['featured'=>$featured,'title'=>$title]);
    }
    public function cart(){
        $cart=\Cart::getContent();
        $title="Cart";

        return view('front.checkout3',['cart'=>$cart,'title'=>$title]);
    }
    public function checkout(){
        $checkout=\Cart::getContent();
        return view('front.checkout',['checkout'=>$checkout]);
    }
   
}
