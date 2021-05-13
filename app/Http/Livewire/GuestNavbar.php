<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Facades\Cart;

class GuestNavbar extends Component
{
    public $cartTotal = 0;
    // public $card = 1;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }

    public function render()
    {
        return view('livewire.guest-navbar', [
            // 'cart' => $this->card,
        ]);
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
}
