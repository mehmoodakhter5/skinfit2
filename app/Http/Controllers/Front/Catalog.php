<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Catalog extends Controller
{
    public function Productview($slug){
        $product=  DB::table('product')->where('product_slug',$slug)->join('category','product_category_id','category_id')->join('brand','product_brand_id','brand_id')->first();
     if($product){
        return view('front.product_detail',compact('product'));
    }else{
        abort(404);
    }
}
}
