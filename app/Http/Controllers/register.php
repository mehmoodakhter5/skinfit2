<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
class register extends Controller
{
    public function index(){

}
    public function login(LoginRequest $request){

    
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('/')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
      
        Auth::login($user);

        return $this->authenticated($request, $user);
}
protected function authenticated(LoginRequest $request, $user) 
{
    return redirect('/admin');
}

public function clear()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}