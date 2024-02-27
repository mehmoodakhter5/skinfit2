<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Brands extends Component
{

    public function render($slug)
    {
        $singlebrand= DB::table('brand')->where('brand_slug',$slug)->first();
        $product= DB::table('product')->where('product_brand_id',$singlebrand->brand_id)->get();
        dd($product);
        $title=$singlebrand->brand_name;
        return view('livewire.brands',compact('singlebrand','title'));
    }
}
