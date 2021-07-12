<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Oferta;
use App\Models\Subcategorie;
use Illuminate\Support\Facades\DB;

class Categories extends Component
{
    protected $title;
    protected $products;
    public $perPage= 20;
    public $search;
    public $orderBy = 'id';
    public $orderAsc = false;
    public $_id;

    public function mount($id){

        $this->_id = $id;
        $this->products = Product::where('subcategorie_id', '=', $this->_id)->get();
        $this->title = Subcategorie::where('id', '=', $this->_id)->get();

        /**
         * GETTING ONLY THE ACTIVE OFFERS WITH BRAND, NAME AND EAN13
         * a multiple query to filter first active offers and then add
         * the required fields to show to the user more data
         * from a subcategorie
         */
        $this->ofertas = Oferta::join("products", "ofertas.product_id", "=", "products.id")
        ->select('ofertas.*',"products.name", "products.product_image", "products.brand", "products.EAN13_individual" )
        ->where('ofertas.active', 'like', 1)
        ->where(function($query) {
			$query->where('products.subcategorie_id', 'like', $this->_id);
        })
        ->with('porte')
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);

    }

    public function render()
    {
        return view('livewire.categories', [
            // 'products' => $this->products,
            'ofertas' => $this->ofertas,
            'products' => $this->products,
            'title' => $this->title[0]->name,
        ]);
    }
}
