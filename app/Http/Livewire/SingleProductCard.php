<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;

class SingleProductCard extends Component
{

    public $product;
    public $subcategorie;
    public $porte;
    // public $cart;

    public function addToCart(string $productId): void
    {
        if($productId == $this->product->id){
            // dd('hello');
            Cart::add($this->product);
            $this->emit('productAdded');
        }

    }

    public function mount($id){
        // dd($id);
        $this->product = Product::findOrFail($id);
        $this->subcategorie = $this->product->subcategorie;
        $this->porte = $this->product->porte;
        // dd($this->porte);
    }

    public function render()
    {
        // $this->product = Product::findOrFail($id);
        return view('livewire.single-product-card', [
            'product' => $this->product,
            'subcategorie' => $this->subcategorie,
            'porte' => $this->porte,
            // 'cart' => $this->cart
            ]);
    }
}
