<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Catalog extends Controller
{
    public function Productview($slug){
    
       $product=  DB::table('product')->where('product_slug',$slug)->join('brand','product_brand_id','brand_id')->first();
       $cate=DB::table('category')->where('category_id',$product->product_category_id)->get()->toArray();
       $firstCategory = $cate[0]; 
       $firstproduct=  DB::table('product')->where('product_category_id',$firstCategory->category_id)->inRandomOrder()->first();
       $secondproduct=  DB::table('product')->where('product_category_id',$firstCategory->category_id)->inRandomOrder()->first();
       $thirdproduct=  DB::table('product')->where('product_category_id',$firstCategory->category_id)->inRandomOrder()->first();
       $fourthproduct=  DB::table('product')->where('product_category_id',$firstCategory->category_id)->inRandomOrder()->first();

       $allproduct=  DB::table('product')->where('product_brand_id',$product->product_brand_id)->where('product_active','true')->limit(8)->get();
       if(Auth::guard('customer')->check()){
        $whish=  DB::table('whishlist')->where('whishlist_product_id',$product->id)->where('whishlist_customer_id',Auth::guard('customer')->id())->first();

       }else{
        $whish=0;
       }

       $title=$product->product_name;
       if($product->product_active=='true'){
        return view('front.product_detail',compact('product','cate','title','allproduct','whish','firstproduct','secondproduct','thirdproduct','fourthproduct'));
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
        $product= db::table('product')->where('product_category_id','like',$category->category_id)->paginate(50);
        $feature= db::table('product')->where('product_category_id','like',$category->category_id)->where('product_featured','true')->limit(9);
        $title=$category->category_name;
            return view('front.product_listing',['feature'=>$feature,'maincategory'=>$category,'title'=>$title,'sub'=>$sub,'product'=>$product]);
    }
    public function sub_category($slug,$aother){
        $category= db::table('category')->where('category_slug',$slug)->first();
        $aothercategory= db::table('sub_category')->where('sub_category_slug',$aother)->first();
        $product= db::table('product')->where('product_sub_category_id','like',$aothercategory->sub_category_id)->paginate(50);
        $feature= db::table('product')->where('product_category_id','like',$aothercategory->sub_category_id)->where('product_featured','true')->limit(9);
        $title=$aothercategory->sub_category_name;
        return view('front.sub_category_listing',['feature'=>$feature,'maincategory'=>$aothercategory,'title'=>$title,'product'=>$product]);

    }
    public function brand($slug){
        $singlebrand= DB::table('brand')->where('brand_slug',$slug)->first();
        $product= DB::table('product')->where('product_brand_id',$singlebrand->brand_id)->get();
        $title=$singlebrand->brand_name;
        $feature= db::table('product')->where('product_brand_id',$singlebrand->brand_id)->where('product_featured','true')->limit(9);

        return view('front.brand',compact('singlebrand','title','feature','product'));
    }
    public function main_listing(){
        $product = array();

        $id= $_GET['cat_id'];
        $product=  DB::table('product')->where('product_sub_category_id',$id)->limit(10)->get();
        return $product;

    }

}
