<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Sub_category;
use App\Models\Sub_category_1;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DeDmytro\CloudflareImages\Facades\CloudflareApi;
use DeDmytro\CloudflareImages\Http\Responses\DetailsResponse;
use DeDmytro\CloudflareImages\Http\Entities\Image;
use App\Imports\ImageImport;
use Maatwebsite\Excel\Facades\Excel;
class Process extends Controller
{
    public function insert_product(Request $request){
        $user = Auth::user();
        if($user){
        $singleimage = time() . '.' . $request->product_image->extension();
        $request->product_image->storeAs('public/product/', $singleimage);
        
        $response = CloudflareApi::images()->upload($request->product_image);
        $image = $response->result;
        
        $multipleImages = [];

        if ($request->hasfile('product_multiple_images')) {
            foreach ($request->product_multiple_images as $image) {
                $multipleImage = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/product/', $multipleImage);
                $multipleImages[] = $multipleImage;
            }
        }
        
        $Product= new Product();
        $Product->product_name=$request->product_name;
        $Product->product_slug=Str::slug($request->product_name);
        $Product->product_category_id=implode(",", $request->product_category_id);
        $Product->product_image=$singleimage;
        $Product->product_multiple_images=implode(',',$multipleImages);
        $Product->product_image_cloud=$image->id;
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
    }else{
        return redirect('/');
    }
    }

    public function add_category(Request $request){
      
        $Category = new Category();
        $Category->category_name=$request->category_name;
        $Category->category_slug=Str::slug($request->category_name);
        $Category->category_text=$request->category_text;
        $Category->category_sort=$request->category_sort;
        $Category->category_created_by=$request->session()->get('id');
        $Category->category_updated_by=$request->session()->get('id');
        $Category->save();
        return $Category;

    }


    public function add_brand(Request $request){
        if($request->hasFile('brand_image')){
            $image = sha1(time()). '.' . $request->brand_image->extension();
        $request->brand_image->storeAs('public/brand/', $image);
        }else{
            $image=1;
        }

        if($request->hasFile('brand_banner')){
        $banner = Str::random(5). '.' . $request->brand_banner->extension();
        $request->brand_banner->storeAs('public/brand/', $banner);
        }else{
            $banner=1;
        };

        $Brand = new Brand();
        $Brand->brand_name=$request->brand_name;
        $Brand->brand_slug=Str::slug($request->brand_name);
        $Brand->brand_featured=$request->brand_featured;
        $Brand->brand_rack=$request->brand_rack;
        $Brand->brand_most_search=$request->brand_most_search;
        $Brand->brand_supplier=$request->brand_supplier;
        $Brand->logistics_type=$request->logistics_type;
        $Brand->brand_text=$request->brand_text;
        $Brand->brand_image=$image;
        $Brand->brand_banner=$banner;
        $Brand->country_id=$request->country_id;
        $Brand->brand_created_by=$request->session()->get('id');
        $Brand->brand_updated_by=$request->session()->get('id');
        $Brand->save();
        return $Brand;
    }


    Public function add_sub_category(Request $request){

        $Sub_category = new Sub_category();
        $Sub_category->category_id=$request->category_id;
        $Sub_category->sub_category_name=$request->sub_category_name;
        $Sub_category->sub_category_slug=Str::slug($request->sub_category_name);
        $Sub_category->sub_category_text=$request->sub_category_text;
        $Sub_category->sub_category_created_by=$request->session()->get('id');
        $Sub_category->sub_category_updated_by=$request->session()->get('id');
        $Sub_category->save();
        return $Sub_category;
    }

    public function add_sub_category_1(Request $request){
        $Sub_category_1 = new Sub_category_1();
       $Sub_category_1->sub_category_id=$request->sub_category_id;
        $Sub_category_1->sub_category_level_2_name=$request->sub_category_level_2_name;
        $Sub_category_1->sub_category_level_2_slug=Str::slug($request->sub_category_level_2_name);
        $Sub_category_1->sub_category_level_2_text=$request->sub_category_level_2_text;
        $Sub_category_1->sub_category_level_2_created_by=$request->session()->get('id');
        $Sub_category_1->sub_category_level_2_updated_by=$request->session()->get('id');
        $Sub_category_1->save();
        return $Sub_category_1;

    }

    public function post_supplier(Request $request){
    
        $Supplier = new Supplier();
        $Supplier->supplier_name=$request->supplier_name;
        $Supplier->supplier_contact_person=$request->supplier_contact_person;
        $Supplier->supplier_contact_person_number=$request->supplier_contact_person_number;
        $Supplier->supplier_source=$request->supplier_source;
        $Supplier->supplier_created_by=$request->session()->get('id');
        $Supplier->supplier_updated_by=$request->session()->get('id');
        $Supplier->save();
         return $Supplier;
    
    }

    public function product_import(Request $request)
    {
        try {
            $result = Excel::import(new ImageImport(), $request->file('excel_file'));

            return $result;
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'An error occurred during the import process.');
        }
    }

}