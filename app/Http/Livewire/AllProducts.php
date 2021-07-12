<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Oferta;
use Livewire\WithPagination;
use App\Support\Collection;

class AllProducts extends Component
{
    use WithPagination;


    /**
     * properties to dinamic searching and paginate the view
     *
     */
    public $perPage= 20;
    public $search;
    public $orderBy = 'id';
    public $orderAsc = false;

    public function mount(){
    }

    public function render()
    {
        /**
         * GETTING ONLY THE ACTIVE OFFERS WITH BRAND, NAME AND EAN13
         * a multiple query to filter first active offers and then add
         * the required fields to show to the user more data
         */
        $ofertas = Oferta::join("products", "ofertas.product_id", "=", "products.id")
        ->select('ofertas.*',"products.name", "products.product_image", "products.brand", "products.EAN13_individual" )
        ->where('ofertas.active', 'like', 1)
        ->where(function($query) {
			$query->where('products.brand', 'like', '%'.$this->search.'%')
                ->orWhere('products.EAN13_individual', 'like', '%'.$this->search.'%')
                ->orWhere('products.name', 'like', '%'.$this->search.'%');
        })
        ->with('porte')
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);


        return view('livewire.all-products', [
            'ofertas' => $ofertas
        ]);
    }

}
