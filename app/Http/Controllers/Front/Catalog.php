<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Catalog extends Controller
{
    public function Productview($slug){
    
       $product=  DB::table('product')->where('product_slug',$slug)->join('brand','product_brand_id','brand_id')->first();
       $cate=DB::table('category')->where('category_id',$product->product_category_id)->get()->toArray();
       $allproduct=  DB::table('product')->where('product_brand_id',$product->product_brand_id)->where('product_active','true')->paginate(12);
       $title=$product->product_name;
       if($product->product_active=='true'){
        return view('front.product_detail',compact('product','cate','title','allproduct'));
    }else{
        return redirect('/');
    }
}
    public function subcategory(){
        $id= $_GET['id'];
        $product=  DB::table('sub_category')->where('category_id',$id)->limit(6)->offset(0)->get();
        return json_encode($product);

    }
    public function category($slug){
        $category= db::table('category')->where('category_slug',$slug)->first();
        $sub=db::table('sub_category')->where('category_id',$category->category_id)->get();
        $product= db::table('product')->where('product_category_id','like',$category->category_id)->paginate(30);
        $feature= db::table('product')->where('product_category_id','like',$category->category_id)->where('product_featured','true')->limit(9);
        $title=$category->category_name;
            return view('front.product_listing',['feature'=>$feature,'maincategory'=>$category,'title'=>$title,'sub'=>$sub,'product'=>$product]);
    }
    public function sub_category($slug,$aother){
        $category= db::table('category')->where('category_slug',$slug)->first();
        $aothercategory= db::table('sub_category')->where('sub_category_slug',$aother)->first();
        $product= db::table('product')->where('product_sub_category_id','like',$aothercategory->sub_category_id)->paginate(30);
        $feature= db::table('product')->where('product_category_id','like',$aothercategory->sub_category_id)->where('product_featured','true')->limit(9);
        $title=$aothercategory->sub_category_name;
        return view('front.sub_category_listing',['feature'=>$feature,'maincategory'=>$aothercategory,'title'=>$title,'product'=>$product]);

    }
    public function main_listing(){
        $product = array();

        $id= $_GET['cat_id'];
        $product=  DB::table('product')->where('product_sub_category_id',$id)->limit(10)->get();
        return $product;

    }

}
