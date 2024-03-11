<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;



class Login extends Controller
{
    public function customer_auth(Request $request) {
        if(!empty($request->email)){
        $user = DB::table('customer')->where('customer_email', $request->email)->first();
        
        if ($user) {
            $password = Hash::check($request->password, $user->customer_password);
            
            if ($password) {
                $userObject = Customer::find($user->customer_id);
                Auth::guard('customer')->login($userObject, true);
                
                if (Auth::guard('customer')->check()) {
                    return redirect()->intended('my-dashboard');
                }
            } else {
                return redirect()->back()->withInput()->with('error', 'Incorrect Password');
            }
        } else {
            return redirect()->back()->with('error', 'Incorrect Email or Password');
        }
    }else{
        return redirect()->back()->with('error', 'Oops Empty Feilds.');

    }
    }
}
