<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index(){
        $products = DB::table('product')->where('product_status','true')->where('product_active','true')->limit(100)->orderBy('id','DESC')->get();
        return view('front.index',['products'=>$products]);
    }
    public function cart(){
        $cart=\Cart::getContent();
        return view('front.checkout3',['cart'=>$cart]);
    }
    public function checkout(){
        $checkout=\Cart::getContent();
        return view('front.checkout',['checkout'=>$checkout]);
    }
   

}
