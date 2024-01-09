<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Countries;


use Response;

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
    public function getproduct(){
        $products =Product::all();
        return Response::json($products);
    }

    public function productadd()
    {

        $user = Auth::user();
        if ($user) {
            $category=Category::all();

            return view("admin.product-add",["category"=> $category]);
        } else {
            return redirect('/');
        }
    }
    
    public function category()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.category");
        } else {
            return redirect('/');
        }
    }
    public function add_category()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.add-category");
        } else {
            return redirect('/');
        }
    }
    public function subcategory()
    {

        $user = Auth::user();
        if ($user) {

            return view("admin.sub-category");
        } else {
            return redirect('/');
        }
    }   
    public function addsubcategory()
    {

        $user = Auth::user();
        if ($user) {
            $category=Category::all();

            return view("admin.add-sub-category",["category"=> $category]);
        } else {
            return redirect('/');
        }
    }   
    public function subcategory1(){
        $user = Auth::user();

               if ($user) {
            return view("admin.sub-category1");
        } else {
            return redirect('/');
        }
    }
    public function addsubcategory1(){
        $user = Auth::user();

            if ($user) {
        return view("admin.add-sub-categorylvl1");
    } else {
        return redirect('/');
 }
    }
    public function brands(){
        $user = Auth::user();

        if ($user) {
    return view("admin.brands");
} else {
    return redirect('/');
}
}
public function add_brand(){
    $user = Auth::user();

    if ($user) {
        $Countries=Countries::all();
return view("admin.add-brand",["Countries"=> $Countries]);
} else {
return redirect('/');
}
}
}
