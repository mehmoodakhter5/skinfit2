<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Catalog extends Controller
{
    public function Productview($slug){
    
       $product=  DB::table('product')->where('product_slug',$slug)->join('brand','product_brand_id','brand_id')->first();
       $cate=DB::table('category')->where('category_id',$product->product_category_id)->get()->toArray();
     if($product->product_active=='true'){
        return view('front.product_detail',compact('product','cate'));
    }else{
        return redirect('/');
    }
}
}
