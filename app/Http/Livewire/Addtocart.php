<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class Addtocart extends Component
{
    public $qty=1;
    public $product_id;
    public function mount($id){
        $this->product_id=$id;
    }
    public function addToCart(){
        $product=Product::find($this->product_id);
        $added= \Cart::add([
             'id' => $product->id,
             'name' => $product->product_name,
             'price' => $product->product_regular_price,
             'quantity' => $this->qty,
             'attributes' => array(
                 'image' => $product->product_image_cloud,
             )
         ]);
            if($added){
                print_r('ADDED');
            }else{
                echo 'error';
            }         
    }
    public function render()
    {
        return view('livewire.addtocart');
    }
}
