<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Facades\Cart;
use Illuminate\Http\Request;

class GuestNavbar extends Component
{
    public $cartTotal = 0;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }

    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

    }

    public function render()
    {
        return view('livewire.guest-navbar', [
            'count' => $this->cartTotal,
            ]);
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
}
