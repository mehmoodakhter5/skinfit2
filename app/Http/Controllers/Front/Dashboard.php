<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{

    public function index(){
        if(Auth::id()){
            $customer= Customer::find(Auth::id());
            return view('front.dashboard1',compact('customer'));
        }else{
            abort(403);
        }
      
    }
    public function orders(){
        if(Auth::id()){
            $orders = DB::table('order')
            ->where('order_customer_id', Auth::id())
            ->join('order_item', 'order.order_no', '=', 'order_item.order_no')
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();           
            $customer= Customer::find(Auth::id());

            return view('front.dashboard2',compact('customer','orders'));
        }else{
            abort(403);
        }
      
    }
}
