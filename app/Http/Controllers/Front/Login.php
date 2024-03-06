<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;



class Login extends Controller
{
    public function customer_auth(Request $request): RedirectResponse {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
         $user= Customer::where('customer_email',$request->email)->first();
         dd($user);       
        $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended(url('dashboard'))
        //                 ->withSuccess('You have Successfully loggedin');
        // }
  
        return redirect("signin")->withSuccess('Oppes! You have entered invalid credentials');
    
    }
    

}
