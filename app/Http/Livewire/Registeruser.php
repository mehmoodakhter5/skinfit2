<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Livewire\Component;
use Livewire\Attributes\Validate; 
class Registeruser extends Component
{

    public $customer_email = "";
    public $customer_first_name = "";
    public $customer_last_name = "";
    public $customer_phone_number = "";
    public $customer_password = "";

    

    public function register(){
        
        $validated = $this->validate([ 
        'customer_email' => 'required|unique:customer,customer_email|email',
        'customer_first_name' => 'required',
        'customer_last_name' => 'required',
        'customer_phone_number' => '',
        'customer_password' => ['required','min:8','regex:/^(?=.*[@#$%]).+$/',],
        ]);
        $validated['customer_password'] = bcrypt($validated['customer_password']);

        $user=Customer::create($validated);
        Auth::login($user);
        if(Auth::check()){
            redirect ('dashboard');
        };


    }
    public function render()
    {
        return view('livewire.registeruser');
    }
}
