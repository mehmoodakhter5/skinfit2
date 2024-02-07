<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Countries;
use App\Models\Sub_category;
use App\Models\Brand;
use App\Models\Inventory;
use App\Models\Sub_category_1;
use App\Models\Supplier;
use App\Models\Blog;
use App\Models\PO;
use Spatie\Activitylog\Models\Activity;
use Response;


class Admin extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $activity=Activity::all();
            return view("admin.index",['activity'=>$activity]);
        } else {
            return redirect('admin/login');
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
    public function supplier()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.supplier");
        } else {
            return redirect('/');
        }
    }
    public function addsupplier()
    {

        $user = Auth::user();
        if ($user) {
            return view("admin.add-supplier");
        } else {
            return redirect('/');
        }
    }


    public function productadd()
    {

        $user = Auth::user();
        if ($user) {
            $category=Category::all();
            $sub=Sub_category::all();
            $sub2=Sub_category_1::all();
            $brand=Brand::all();
            return view("admin.product-add",["category"=> $category,'sub'=>$sub,'sub2'=>$sub2,'brand'=>$brand]);
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
            $subcaegory=Sub_category::all();    
        return view("admin.add-sub-categorylvl1",['subcategory'=>$subcaegory]);
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
public function inventroy(){
    $user=Auth::user();
    if($user){
        return view('admin.inventory');
    }
}
public function po(){
    $user=Auth::user();
    if($user){
        return view('admin.po');
    }else{
        return redirect('admin');
    }
}
public function add_inventroy(){
    $user=Auth::user();
    if($user){
        $brand=Brand::all();
        $supplier=Supplier::all();
        return view('admin.add-inventory',['brand'=>$brand,'supplier'=>$supplier]);
    }
}

public function blog(){
    $user = Auth::user();
    if($user){
        return view('admin.blog');
    }
}

  




//Tables API GET 
public function getproduct(){
    $user = Auth::user();
    if($user){
    $products = Product::orderBy('id')->get();
    return Response::json($products);
    }else{
        abort(403);
    }
}
public function getcategory(){
    $user = Auth::user();
    if($user){
    $category = Category::all();
    return Response::json($category);
}else{
    abort(403);
}
}
public function getbrand(){
    $user = Auth::user();
    if($user){ 
    $brand = Brand::all();
    return Response::json($brand);
}else{
    abort(403);
}
}
public function getsupplier(){
    $user = Auth::user();
    if($user){ 
    $supplier = Supplier::all();
    return Response::json($supplier);
}else{
    abort(403);
}
}
public function getinventory(){
    $user = Auth::user();
    if($user){ 
    $inventory = Inventory::all();
    return Response::json($inventory);
}else{
    abort(403);
}
}
public function getblog(){
    $user = Auth::user();
    if($user){ 
    $blog = Blog::all();
    return Response::json($blog);
}else{
    abort(403);
}
}
public function getpo(){
    $user = Auth::user();
    if($user){ 
    $po = PO::all();
    return Response::json($po);
}else{
    abort(403);
}
}

}
