<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DeDmytro\CloudflareImages\Facades\CloudflareApi;
use Illuminate\Http\Request;
use App\Imports\ImageImport;
use Illuminate\Support\Facades\Storage;

class Homepage extends Controller
{
     public function store(Request $request,$id){
      
        $home= Home::find($id);
        $home->homepage_section_one_heading_one=$request->homepage_section_one_heading_one;
        $home->homepage_section_one_text_one=$request->homepage_section_one_text_one;
        $home->homepage_section_one_text_one_link=$request->homepage_section_one_text_one_link;
        $home->homepage_section_one_text_one_link_text=$request->homepage_section_one_text_one_link_text;
        if($request->hasFile('homepage_section_one_image_one')){
         $singleimage = time() . '.' . $request->homepage_section_one_image_one->extension();
         $request->homepage_section_one_image_one->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_one_image_one);
         $image = $response->result;
         $home->homepage_section_one_image_one=$image->id;
        }
        $home->homepage_section_one_image_one_link=$request->homepage_section_one_image_one_link;
        if($request->hasFile('homepage_section_one_image_two')){
         $singleimage = time() . '.' . $request->homepage_section_one_image_two->extension();
         $request->homepage_section_one_image_two->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_one_image_two);
         $image2 = $response->result;
         $home->homepage_section_one_image_two=$image2->id;
        }
        $home->homepage_section_one_image_two_link=$request->homepage_section_one_image_two_link;
        if($request->hasFile('homepage_section_one_image_three')){
         $singleimage = time() . '.' . $request->homepage_section_one_image_three->extension();
         $request->homepage_section_one_image_three->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_one_image_three);
         $image3 = $response->result;
         $home->homepage_section_one_image_three=$image3->id;
        }
        $home->homepage_section_one_image_three_link=$request->homepage_section_one_image_three_link;


        
        $home->homepage_section_one_image_text=$request->homepage_section_one_image_text;
        $home->homepage_section_one_image_text_span=$request->homepage_section_one_image_text_span;

        if($request->hasFile('homepage_section_two_banner_image')){
         $singleimage = time() . '.' . $request->homepage_section_two_banner_image->extension();
         $request->homepage_section_two_banner_image->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_two_banner_image);
         $image4 = $response->result;
         $home->homepage_section_two_banner_image=$image4->id;
        }
        $home->homepage_section_two_heading_one=$request->homepage_section_two_heading_one;

        $home->homepage_section_two_text=$request->homepage_section_two_text;
        if($request->hasFile('homepage_section_three_banner_image')){
         $singleimage = time() . '.' . $request->homepage_section_three_banner_image->extension();
         $request->homepage_section_three_banner_image->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_three_banner_image);
         $image5 = $response->result;
         $home->homepage_section_three_banner_image=$image5->id;
        }
        if($request->hasFile('homepage_section_three_image_one')){
         $singleimage = time() . '.' . $request->homepage_section_three_image_one->extension();
         $request->homepage_section_three_image_one->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_three_image_one);
         $image6 = $response->result;
         $home->homepage_section_three_image_one=$image6->id;
        }
        $home->homepage_section_three_image_one_link=$request->homepage_section_three_image_one_link;
        if($request->hasFile('homepage_section_three_image_two')){
         $singleimage = time() . '.' . $request->homepage_section_three_image_two->extension();
         $request->homepage_section_three_image_two->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_three_image_two);
         $image7 = $response->result;
         $home->homepage_section_three_image_two=$image7->id;
        }
        $home->homepage_section_three_image_two_link=$request->homepage_section_three_image_two_link;
        if($request->hasFile('homepage_section_three_image_two')){
         $singleimage = time() . '.' . $request->homepage_section_three_image_three->extension();
         $request->homepage_section_three_image_three->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_three_image_three);
         $image8 = $response->result;
         $home->homepage_section_three_image_three=$image8->id;
        }
        $home->homepage_section_three_image_three_link=$request->homepage_section_three_image_three_link;
        if($request->hasFile('homepage_section_three_image_four')){
         $singleimage = time() . '.' . $request->homepage_section_three_image_four->extension();
         $request->homepage_section_three_image_four->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_three_image_four);
         $image9 = $response->result;
         $home->homepage_section_three_image_four=$image9->id;
        }
        $home->homepage_section_three_image_four_link=$request->homepage_section_three_image_four_link;
        $home->homepage_section_four_heading=$request->homepage_section_four_heading;
        $home->homepage_section_four_text=$request->homepage_section_four_text;
        if($request->hasFile('homepage_section_four_box_one_icon')){
         $singleimage = time() . '.' . $request->homepage_section_four_box_one_icon->extension();
         $request->homepage_section_four_box_one_icon->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_four_box_one_icon);
         $image10 = $response->result;
         $home->homepage_section_four_box_one_icon=$image10->id;
        }
        $home->homepage_section_four_box_one_heading=$request->homepage_section_four_box_one_heading;
        $home->homepage_section_four_box_one_text=$request->homepage_section_four_box_one_text;
        if($request->hasFile('homepage_section_four_box_two_icon')){
         $singleimage = time() . '.' . $request->homepage_section_four_box_one_icon->extension();
         $request->homepage_section_four_box_two_icon->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_four_box_two_icon);
         $image11 = $response->result;
         $home->homepage_section_four_box_two_icon=$image11->id;
        }
        $home->homepage_section_four_box_two_heading=$request->homepage_section_four_box_two_heading;
        $home->homepage_section_four_box_two_text=$request->homepage_section_four_box_two_text;
        if($request->hasFile('homepage_section_four_box_three_icon')){
         $singleimage = time() . '.' . $request->homepage_section_four_box_three_icon->extension();
         $request->homepage_section_four_box_three_icon->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_four_box_three_icon);
         $image12 = $response->result;
         $home->homepage_section_four_box_three_icon=$image12->id;
        }
        $home->homepage_section_four_box_three_heading=$request->homepage_section_four_box_three_heading;
        $home->homepage_section_four_box_three_text=$request->homepage_section_four_box_three_text;
        if($request->hasFile('homepage_section_four_box_four_icon')){
         $singleimage = time() . '.' . $request->homepage_section_four_box_four_icon->extension();
         $request->homepage_section_four_box_four_icon->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_four_box_four_icon);
         $image13 = $response->result;
         $home->homepage_section_four_box_four_icon=$image13->id;
        }
        $home->homepage_section_four_box_four_heading=$request->homepage_section_four_box_four_heading;
        $home->homepage_section_four_box_four_text=$request->homepage_section_four_box_four_text;
        if($request->hasFile('homepage_section_five_image_one')){
         $singleimage = time() . '.' . $request->homepage_section_five_image_one->extension();
         $request->homepage_section_five_image_one->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_five_image_one);
         $image14 = $response->result;
         $home->homepage_section_five_image_one=$image14->id;
        }
        $home->homepage_section_five_image_one_link=$request->homepage_section_five_image_one_link;
        if($request->hasFile('homepage_section_five_image_two')){
         $singleimage = time() . '.' . $request->homepage_section_five_image_two->extension();
         $request->homepage_section_five_image_two->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_five_image_two);
         $image15 = $response->result;
         $home->homepage_section_five_image_two=$image15->id;
        }
        $home->homepage_section_five_image_two_link=$request->homepage_section_five_image_two_link;
        if($request->hasFile('homepage_section_five_image_three')){
         $singleimage = time() . '.' . $request->homepage_section_five_image_three->extension();
         $request->homepage_section_five_image_three->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_five_image_three);
         $image16 = $response->result;
         $home->homepage_section_five_image_three=$image16->id;
        }
        $home->homepage_section_five_image_three_link=$request->homepage_section_five_image_three_link;
        $home->homepage_section_five_image_three_heading=$request->homepage_section_five_image_three_heading;
        $home->homepage_section_five_image_three_heading_span=$request->homepage_section_five_image_three_heading_span;
        $home->homepage_section_five_image_three_text=$request->homepage_section_five_image_three_text;
        $home->homepage_section_five_image_three_span_text=$request->homepage_section_five_image_three_span_text;
        $home->homepage_section_six_heading=$request->homepage_section_six_heading;
        $home->homepage_section_six_text=$request->homepage_section_six_text;
        if($request->hasFile('homepage_section_seven_image_one')){
         $singleimage = time() . '.' . $request->homepage_section_seven_image_one->extension();
         $request->homepage_section_seven_image_one->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_seven_image_one);
         $image17 = $response->result;
         $home->homepage_section_seven_image_one=$image17->id;
        }
        $home->homepage_section_seven_image_one_link=$request->homepage_section_seven_image_one_link;
        if($request->hasFile('homepage_section_seven_image_two')){
         $singleimage = time() . '.' . $request->homepage_section_seven_image_two->extension();
         $request->homepage_section_seven_image_two->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_seven_image_two);
         $image18 = $response->result;
         $home->homepage_section_seven_image_two=$image18->id;
        }
        $home->homepage_section_seven_image_two_link=$request->homepage_section_seven_image_two_link;
        if($request->hasFile('homepage_section_eight_heading')){
         $singleimage = time() . '.' . $request->homepage_section_eight_heading->extension();
         $request->homepage_section_eight_heading->storeAs('public/storage/home/', $singleimage);
         $response = CloudflareApi::images()->upload($request->homepage_section_eight_heading);
         $image19 = $response->result;
         $home->homepage_section_eight_heading=$image19->id;
        }
        $home->homepage_section_eight_heading=$request->homepage_section_eight_heading;
        $saved=$home->save();
        if($saved==='true'){
            return redirect()->back()->with('success','Homepage Updated Successfully');
        }

     }
}
