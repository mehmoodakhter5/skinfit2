<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reviews;

class Rating extends Component
{
    public $product_id;
    public $rating_name;
    public $rating_email;
    public $rating_message;


    public function mount($id)
    {
        $this->product_id = $id;
    }

    public function add_rating()
    {
        $rating= new Reviews;
        $rating->review_name=$this->rating_name;
        $rating->review_email=$this->rating_email;
        $rating->review_phone_number='0';
        $rating->review_star='0';
        $rating->review_message=$this->rating_message;
        $rating->review_product_id=$this->product_id;
        $rating->save();
    }
    public function render()
    {
        return view('livewire.rating');
    }
}
