<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Ecommerce extends Controller
{
     public function checkout(Request $request)

     {
        $user=Auth::user();
        if($user){
            $customer=$request->session()->get("user_id");
        }else{
            $customer=0;
        };
        if($request){
            $today=Carbon::now();
            $order= new Order();
            $order->order_no=Carbon::now()->format('Yd').Str::random(5).substr(time(), 6,8);
            $order->order_customer_id=$customer;
            $order->order_payment_type=$request->order_payment_type;
            $order->order_notes=$request->order_notes;
            $order->order_current_status='Pending';
            $order->order_actual_amt=\Cart::getTotal();
            $order->order_total_amt=\Cart::getTotal();
            $order->order_customer_first_name=$request->order_customer_first_name;
            $order->order_customer_address=$request->order_customer_address;
            $order->order_customer_last_name=$request->order_customer_last_name;
            $order->order_customer_phone=$request->order_customer_phone;
            $order->order_customer_whatsapp_phone=$request->order_customer_whatsapp_phone;
            $order->order_customer_email=$request->order_customer_email;
            $order->order_customer_state=$request->order_customer_state;
            $order->order_customer_city=$request->order_customer_city;
            $order->order_customer_landmark=$request->order_customer_landmark;
            $order->save();
            $id=$order->order_id;
            $num=$order->order_no;


            $order_item=new Order_item();
           $items= \Cart::getContent();
           foreach($items as $item){
            $order_item->order_id=$id;
            $order_item->order_no=$num;
            $order_item->product_id=$item->id;
            $order_item->product_type='Product';
            $order_item->product_variant_id='0';
            $order_item->product_variant='0';
            $order_item->product_qty=$item->qty;
            $order_item->save();
           }
           





        }else{
            return back()->with("error","Hmmm! Unable to proceed.");
        }
     }
}
