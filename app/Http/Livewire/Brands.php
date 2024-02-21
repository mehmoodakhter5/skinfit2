<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Brands extends Component
{

    public function render($slug)
    {
        $singlebrand= DB::table('brand')->where('brand_slug',$slug)->first();
        $title=$singlebrand->brand_name;
        return view('livewire.brands',compact('singlebrand','title'));
    }
}
