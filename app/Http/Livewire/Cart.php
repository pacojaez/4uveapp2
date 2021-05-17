<?php

namespace App\Http\Livewire;

use App\Facades\Cart as CartFacade;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount(): void
    {
        $this->cart = CartFacade::get();
        // dd($this->cart);
    }

    public function render()
    {
        return view('livewire.cart', [
            'cart' => 1,
        ]);
    }

    public function removeFromCart($productId): void
    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
    }

    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
    }
}
