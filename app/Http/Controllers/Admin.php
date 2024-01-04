<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            return view("admin.index");
        } else {
            return redirect('/');
        }
    }
    public function product()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.product");
        } else {
            return redirect('/');
        }
    }

    public function productadd()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.product-add");
        } else {
            return redirect('/');
        }
    }
}

