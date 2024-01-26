<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class Ecommerce extends Controller
{
     public function checkout(Request $request)

     {
        if($request){

        }else{
            return back()->with("error","Hmmm! Unable to proceed.");
        }
     }
}
