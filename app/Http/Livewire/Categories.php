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

    public function mount($id){

        $this->products = Product::where('subcategorie_id', '=', $id)->get();
        $this->title = Subcategorie::where('id', '=', $id)->get();

        $this->ofertas = Oferta::join("products", "ofertas.product_id", "=", "products.id")
        ->select('ofertas.*',"products.name", "products.product_image", "products.brand", "products.EAN13_individual" )
        // ->where("alumnos.nombre", "=", $this->search)
        ->where('products.subcategorie_id', 'like', $id)
        // ->where('products.brand', 'like', '%'.$this->search.'%')
        // ->orWhere('products.EAN13_individual', 'like', '%'.$this->search.'%')
        // ->orWhere('products.name', 'like', '%'.$this->search.'%')
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
