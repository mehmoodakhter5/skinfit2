<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

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
            return view('front.dashboard2');
        }else{
            abort(403);
        }
      
    }
}
