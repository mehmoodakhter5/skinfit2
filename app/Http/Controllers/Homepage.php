<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DeDmytro\CloudflareImages\Facades\CloudflareApi;
use Illuminate\Http\Request;

class Homepage extends Controller
{
     public function store(Request $request,$id){
        $home= new Homepage();

     }
}
