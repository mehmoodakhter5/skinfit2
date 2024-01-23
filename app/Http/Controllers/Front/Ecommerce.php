<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class Ecommerce extends Controller
{
    public function addToCart($id)
    {
        $product=Product::find($id);
        \Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_regular_price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $product->product_image_cloud,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
}
