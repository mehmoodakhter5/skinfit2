<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class Main extends Controller
{
    public function index(){
        $featured = DB::table('product')->where('product_status','true')->where('product_active','true')->where('product_featured',true)->limit(100)->orderBy('id','DESC')->get();
        $title=NULL;
        $home=DB::table('homepage')->where('homepage_id',1)->first();
        return view('front.index',['featured'=>$featured,'title'=>$title,'home'=>$home]);
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
