<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Addtocart extends Component
{
    public $qty = 1;
    public $product_id;

    public function mount($id)
    {
        $this->product_id = $id;
    }

    public function addToCart()
    {
        $product = Product::find($this->product_id);

        if (!$product) {
            $this->addError('product_id', 'Product not found.');
            return;
        }

        if (!is_numeric($this->qty) || $this->qty < 1) {
            $this->addError('qty', 'Invalid quantity.');
            return;
        }

        $added = \Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_regular_price,
            'quantity' => $this->qty,
            'attributes' => [
                'image' => $product->product_image_cloud,
            ],
        ]);

        if ($added) {
            session()->flash('success', 'Product added to cart successfully.');
            $this->emit('counter');
        } else {
            session()->flash('error', 'Failed to add product to cart.');
        }
   
      ;
    }

    public function render()
    {
        return view('livewire.addtocart');
    }
}
