<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;
class Roles extends Controller
{
    public function index(){
        if(Gate::allows('all')){
        return view("admin.users");
    }else{
        abort(403);
    }
}
    public function getuser(){
        $user = User::all();
        return json_encode($user);
    }
    public function view(){
        if(Gate::allows('all')){
            return view('admin.add-user');
        }else{
            abort(403);
        }
}
    public function store(Request $request){
        $user=Auth::user();
        if($user->can('all')){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type=$request->type;
        $user->save();
        return $user;

        }else{
            abort(403);
        }
}
}