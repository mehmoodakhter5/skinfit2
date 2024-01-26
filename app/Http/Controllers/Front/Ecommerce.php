<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Ecommerce extends Controller
{
     public function checkout(Request $request)

     {
        if($request){
            $order= new Order();
            $order->order_no=Carbon::now()->format('Yd').'THF'.Str::random(5).substr(time(), 6,8);
        }else{
            return back()->with("error","Hmmm! Unable to proceed.");
        }
     }
}
