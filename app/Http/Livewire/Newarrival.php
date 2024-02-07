<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Newarrival extends Component
{
    public function render()
    {
        $products = DB::table('product')->where('product_status','true')->where('product_active','true')->limit(70)->orderBy('id','DESC')->get();
        return view('livewire.newarrival',['products'=>$products]);
    }
}
