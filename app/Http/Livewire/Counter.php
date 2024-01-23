<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function counter()
    {
    }
    public function render()
    {
        $this->count= \Cart::getContent()->count();

        return view('livewire.counter');
    }
}
