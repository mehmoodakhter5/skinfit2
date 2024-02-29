<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class MainProductListing extends Component
{
    use WithPagination;
    public $cateogryslug;
    public function mount($slug)
    {

        $this->cateogryslug = $slug;
    }

    public function render()
    {

        $product= db::table('product')->where('product_category_id','like',$this->cateogryslug)->paginate(30);
        return view('livewire.main-product-listing',['product'=>$product]);
    }
}
