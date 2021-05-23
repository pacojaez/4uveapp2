<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\Cart;

class NavCart extends Component
{
    public $count;

    protected $listeners =[
        'refresh' => 'mount'
    ];

    public function mount(){

        $this->count = Cart::items();
    }

    public function render()
    {

        return view('livewire.nav-cart', [
            'count' => $this->count
        ]);
    }
}
