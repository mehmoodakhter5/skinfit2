<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Attributes\Url;

use Livewire\Component;

class Search extends Component
{
    public $searchtext = '';
 
    public function render()
    {
        $products = [];

        if (!empty($this->searchtext)) {
            $products = Product::where('product_name', 'like', '%' . $this->searchtext . '%')->limit(10)->get();
        }
        return view('livewire.search', ['product' => $products]);

    }
}
