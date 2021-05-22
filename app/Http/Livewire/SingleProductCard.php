<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;
// use App\Models\Cart;

class SingleProductCard extends Component
{

    public $product;
    public $subcategorie;
    public $porte;
    public $quantity = 1;
    // public $cart;



    public function mount($id){
        // dd($id);
        // $this->set();
        $this->quantity;
        $this->product = Product::findOrFail($id);
        $this->subcategorie = $this->product->subcategorie;
        $this->porte = $this->product->porte;
        // dd($this->porte);
    }

    public function render(): View
    {
        // $this->product = Product::findOrFail($id);
        return view('livewire.single-product-card', [
            'product' => $this->product,
            'subcategorie' => $this->subcategorie,
            'porte' => $this->porte,
            'quantity' => $this->quantity
            // 'cart' => $this->cart
            ]);
    }

    /**
     * Adds an item to cart.
     *
     * @return void
     */
    public function addToCart(): void
    {
        Cart::add($this->product->id, $this->product->name, $this->product->getRawOriginal('invoice_cost_price'), $this->quantity);
        // dd($one);
        $this->emitUp('productAddedToCart');
        $this->emitTo('guest-nav-bar', 'productAdded');
        $this->emitTo('cart', 'productAdded');
        // dd($this->quantity);
    }
}
