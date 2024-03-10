<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reviews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Rating extends Component
{
    public $product_id;
    public $product_name;
    public $rating_name;
    public $rating_email;
    public $rating_message;
    public $total;

    public function mount($id,$name)
    {
        $this->product_id = $id;
        $this->product_name = $name;

        $this->total=DB::table('review')->where('review_product_id',$this->product_id)->where('review_approval','true')->orderBy('created_at','DESC')->limit(10)->get();
    }

    public function add_rating()
    {
        if(!empty(Auth::id())){
            $id= Auth::id();
        }else{
            $id=0;
        }
        $rating= new Reviews;
        $rating->review_name=$this->rating_name;
        $rating->review_email=$this->rating_email;
        $rating->review_phone_number='0';
        $rating->review_star='0';
        $rating->review_customer_id=$id;
        $rating->review_message=$this->rating_message;
        $rating->review_product_id=$this->product_id;
        $rating->save();
    }
    public function render()
    {
        return view('livewire.rating');
    }
}
