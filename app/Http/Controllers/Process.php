<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Process extends Controller
{
    public function insert_product(Request $request){
        // $fileName = time() . '.' . $request->product_image->extension();
        // $request->image->storeAs('public/product/', $fileName);
        $Product= new Product();
        $Product->product_name=$request->product_name;
        $Product->product_slug=Str::slug($request->product_name);
        $Product->product_category_id=implode(",", $request->product_category_id);
        $Product->product_image=1;
        $Product->product_image_cloud='png';
        $Product->product_short_description=$request->product_short_description;
        $Product->product_long_description=$request->product_long_description;
        $Product->product_description_one=$request->product_description_one;
        $Product->product_description_two=$request->product_description_two;
        $Product->product_regular_price=$request->product_regular_price;
        $Product->product_discounted_price=$request->product_discounted_price;
        $Product->product_label=$request->product_label;
        $Product->product_volume=$request->product_volume;
        $Product->product_created_by= $request->session()->get('id');
        $Product->product_updated_by= $request->session()->get('id');
        $Product->product_barcode=$request->product_barcode;
        $Product->product_sub_category_id=implode(",", $request->product_sub_category_id);
        $Product->product_sub_category_id_level_two=implode(",",$request->product_sub_category_id_level_two);
        $Product->product_sub_category_id_level_two=implode(",",$request->product_sub_category_id_level_two);
        $Product->product_brand_id=$request->product_brand_id;
        $Product->save();
        return $Product;
    }

    public function add_category(Request $request){
        $fileName = time() . '.' . $request->category_image->extension();
        $request->image->storeAs('public/product/', $fileName);
      
        $Category = new Category();
        $Category->category_name=('');
        $Category->category_slug=Str::slug($request->category_name);
        $Category->category_image=$fileName;
        $Category->category_text=$request->category_text;
        $Category->category_feature=$request->category_feature;
        $Category->category_sort=$request->category_sort;
        $Category->attribute_ids=$request->attribute_ids;
        $Category->category_created_by='';
        $Category->category_updated_by='';
        $Category->save();
        return $Category;

    }

    public function add_brand(){
        $Brand = new Brand();
        $Brand->brand_name=('');
        $Brand->brand_slug=('');
        $Brand->brand_featured=('');
        $Brand->brand_rack=('');
        $Brand->brand_most_search=('');
        $Brand->brand_supplier=('');
        $Brand->logistics_type=('');
        $Brand->brand_active=('');
        $Brand->brand_text=('');
        $Brand->brand_image=('');
        $Brand->brand_banner=('');
        $Brand->country_id=('');
        $Brand->brand_created_by=('');
        $Brand->brand_updated_by=('');

        $Brand->save();
        return $Brand;







        





    

    }
}