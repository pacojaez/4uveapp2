<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Facades\Cart as CartOne;
use Illuminate\Http\Request;
use App\Facades\Cart;

class GuestNavbar extends Component
{
    public $cartTotal = 0;
    public $cartCount = 0;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal',
        'refresh' => 'mount'
    ];

    public function updateCartTotal(): void
    {
        // $this->cartCount = Cart::items();
    }

    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

    }

    public function mount(): void
    {
        $this->cartCount = Cart::items();
        $this->render();
        // dd($this->cartCount = Cart::items());
    }

    public function render()
    {
        // $this->cartCount = Cart::items();

        return view('livewire.guest-navbar', [
            'count' => $this->cartCount,
            ]);
    }


}
