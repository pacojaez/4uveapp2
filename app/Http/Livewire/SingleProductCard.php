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


/**
 * CLASS NOT USED IN THIS PROJECT
 * WE USE THE OFFER CLASS TO SHOW TO THE USER
 */

class SingleProductCard extends Component
{
    /**
     * Public properties to pass to the view
     */
    public Product $product;
    public Subcategorie $subcategorie;
    public Categorie $category;
    public Porte $porte;
    public $quantity = 1;
    public Oferta $oferta;

    public function mount($id){

        $this->quantity;
        $this->oferta = Oferta::findOrFail($id);
        $this->product = Product::where('id', 'like', $this->oferta->product_id);
        $this->subcategorie = Subcategorie::where('id', 'like' , $this->product->subcategorie_id );
        $this->category = Categorie::where('id', '=', $this->subcategorie->category_id)->first()->name;
        $this->porte = $this->product->porte;

    }

    public function render(): View
    {
        return view('livewire.single-product-card', [
            'oferta' => $this->oferta,
            'product' => $this->product,
            'subcategorie' => $this->subcategorie,
            'porte' => $this->porte,
            'quantity' => $this->quantity,
            'category' => $this->category,
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

        $this->emitTo('nav-cart', 'refresh');
    }
}
