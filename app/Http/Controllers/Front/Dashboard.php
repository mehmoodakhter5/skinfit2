<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Dive\Wishlist\Facades\Wishlist;

class Dashboard extends Controller
{

    public function index(){
        if(Auth::guard('customer')->check()){
            $customer= Customer::find(Auth::guard('customer')->id());
            return view('front.dashboard1',compact('customer'));
        }else{
            abort(403);
        }
      
    }
    public function orders(){
        if(Auth::guard('customer')->check()){
            $orders = DB::table('order')
            ->where('order_customer_id', Auth::guard('customer')->id())
            ->join('order_item', 'order.order_no', '=', 'order_item.order_no')
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();           
            $customer= Customer::find(Auth::id());

            return view('front.dashboard2',compact('customer','orders'));
        }else{
            abort(403);
        }
      
    }
    public function wishlist(){
        if(Auth::guard('customer')->check()){
             $customer= Customer::find(Auth::guard('customer')->id());
            $whishlist=DB::table('whishlist')->where('whishlist_customer_id',Auth::guard('customer')->id())->join('product','whishlist_product_id','id')->get();
            return view('front.dashboard5',compact('customer','whishlist'));
        }else{
            abort(403);
        }
      
    }
    public function detail(){
        if(Auth::guard('customer')->check()){
             $customer= Customer::find(Auth::guard('customer')->id());
            $whishlist=DB::table('whishlist')->where('whishlist_customer_id',Auth::guard('customer')->id())->join('product','whishlist_product_id','id')->get();
            return view('front.dashboard6',compact('customer','whishlist'));
        }else{
            abort(403);
        }
      
    }
}
