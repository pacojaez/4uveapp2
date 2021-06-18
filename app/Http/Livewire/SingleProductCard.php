<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Models\Porte;

use App\Models\Oferta;
// use App\Models\Cart;

class SingleProductCard extends Component
{

    public Product $product;
    public Subcategorie $subcategorie;
    public Categorie $category;
    public Porte $porte;
    public $quantity = 1;
    public Oferta $oferta;
    // public $cart;



    public function mount($id){
        dd($id);
        // $this->set();
        $this->quantity;
        $this->oferta = Oferta::findOrFail($id);
        $this->product = Product::where('id', 'like', $this->oferta->product_id);
        $this->subcategorie = Subcategorie::where('id', 'like' , $this->product->subcategorie_id );
        $this->category = Categorie::where('id', '=', $this->subcategorie->category_id)->first()->name;
        $this->porte = $this->product->porte;

        dd($this->category->name);
    }

    public function render(): View
    {
        // $this->product = Product::findOrFail($id);
        return view('livewire.single-product-card', [
            'oferta' => $this->oferta,
            'product' => $this->product,
            'subcategorie' => $this->subcategorie,
            'porte' => $this->porte,
            'quantity' => $this->quantity,
            'category' => $this->category,
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
        // $this->emitUp('productAddedToCart');
        // $this->emitTo('guest-nav-bar', 'productAdded');
        // $this->emitTo('cart', 'productAdded');
        $this->emitTo('nav-cart', 'refresh');
        // dd($this->quantity);
    }
}
