<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Models\Oferta;
use App\Models\Porte;

class SingleOfertaCard extends Component
{
    public Product $product;
    public Subcategorie $subcategorie;
    public Categorie $category;
    public Porte $porte;
    public $quantity = 1;
    public Oferta $oferta;


    /**
     * Adds an item to cart.
     *
     * @return void
     */
    public function addToCart(): void
    {
        //añadimos un Item con la cantidad indicada al Carrito
        Cart::add($this->oferta->id, $this->product->name, $this->oferta->getRawOriginal('offer_prize'), $this->quantity);
        //emite al nav-cart el dato para que lo actualize
        $this->emitTo('nav-cart', 'refresh');
    }

    /**
     * Recogemos los parametros necesario para montar la vista
     *
     * @param [type] $id
     * @return void
     */
    public function mount($id){

        $this->oferta = Oferta::findOrFail($id);
        $this->product = Product::where('id', 'like', $this->oferta->product_id)->first();
        // dd($this->product);
        $this->subcategorie = Subcategorie::where('id', 'like', $this->product->subcategorie_id)->first();
        $this->category = Categorie::where('id', '=', $this->subcategorie->category_id)->first();
        $this->porte = Porte::where('id', 'like', $this->oferta->porte_id)->first();

    }

    public function render()
    {
        return view('livewire.single-oferta-card', [
            'oferta' => $this->oferta,
            'subcategorie' => $this->subcategorie,
            'category' => $this->category,
            'product' => $this->product,
            'porte' => $this->porte,
        ]);
    }
}
