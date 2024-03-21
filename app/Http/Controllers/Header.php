<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headersetting;
use DeDmytro\CloudflareImages\Facades\CloudflareApi;
use App\Imports\ImageImport;
use Illuminate\Support\Facades\Storage;

class Header extends Controller
{
    public function store_header(Request $request,$id){
        $head= Headersetting::find($id);
        if($request->hasFile('header_setting_image')){
        $singleimage = time() . '.' . $request->header_setting_image->extension();
        $request->header_setting_image->storeAs('public/storage/header/', $singleimage);
        $response = CloudflareApi::images()->upload($request->header_setting_image);
        $image = $response->result;
        };

        $head->header_setting_link = $request->header_setting_link;
        $head->header_setting_image = $image->id;
        $head->save();
        return redirect()->back()->with('success','Successfuly Updated!');

    }
}
