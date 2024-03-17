<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class General extends Controller
{
    public function update_account(Request $request){
            $customer= Customer::find(Auth::guard('customer')->id());
            $customer->customer_email=$request->customer_email;
            $customer->customer_first_name=$request->customer_first_name;
            $customer->customer_last_name=$request->customer_last_name;
            if(!empty($request->current_password)){
                if (Hash::check($request->current_password, $customer->customer_password)) {
                        $customer->customer_password= Hash::make($request->new_password);
                }else{
                    return redirect()->back()-with('error','Your Current Password is incorrect!');
                }
            }

            $saved=$customer->save();
            if($saved==='true'){
                return redirect()->back()-with('success','Account Details Updated Successfully!');

            }
            
    }
}
