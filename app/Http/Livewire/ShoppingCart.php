<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart;
    public function render()
    {
        return view('livewire.shopping-cart', [
            'cart' => $this->cart,
        ])
        // ->extends('layouts.guest')
        ;
    }
}
