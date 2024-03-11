<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use App\Models\Whishlist;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class Ecommerce extends Controller
{
     public function checkout(Request $request)

     {
        $user=Auth::guard('customer')->check();
        if($user){
            $customer=Auth::guard('customer')->id();
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
     public function store_cart(Request $request){
        $product=DB::table('product')->where('id',$request->product_id)->first();
        $added = \Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_regular_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image' => $product->product_image_cloud,
            ],
        ]);
        $clear=DB::table('whishlist')->where('whishlist_product_id',$request->product_id)->delete();
        return back()->with("success","Added To Cart.");
    }
    public function add_whislist($id){

        $whishlist= new Whishlist();
        $whishlist->whishlist_product_id=$id;
        $whishlist->whishlist_customer_id=Auth::guard('customer')->id();
        $whishlist->save();
        return redirect()->back();

    }
    public function track(){
        if(isset($_GET['order_email']) && isset($_GET['order_no'])){
            $orderemail=$_GET['order_email'];
            $orderno=$_GET['order_no'];
            $result=DB::table('order')->where('order_no',$orderno)->where('order_customer_email',$orderemail)->first();
            return view('front.tracking',compact('result'));
        }else{
            return redirect('track-your-order');
        }
       
    }
}
