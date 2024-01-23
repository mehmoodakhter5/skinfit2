<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Catalog extends Controller
{
    public function Productview($slug){
        $product = Product::whereproduct_slug($slug)->first();
     if($product){
        return view('front.product_detail',compact('product'));
    }else{
        abort(404);
    }
}
}
