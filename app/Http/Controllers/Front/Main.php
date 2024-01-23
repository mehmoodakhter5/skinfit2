<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index(){
        $products = DB::table('product')->where('product_status','true')->get();;
       
        return view('front.index',['products'=>$products]);
    }
   

}
