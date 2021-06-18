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

    protected $products;
    public $perPage= 20;
    public $search;
    public $orderBy = 'id';
    public $orderAsc = false;

    public function mount(){
    }

    public function buscar( ){
        // $search = $this->search;
        // // $ofertas =  Oferta::with(array('product' => function($query){
        // //     $query
        // //     ->where('name', 'like', '%'.$search.'%')
        // //     ->orWhere('part_number', 'like', '%'.$search.'%')
        // //     ->orWhere('brand', 'like', '%'.$search.'%')
        // //     ->orWhere('EAN13_individual', 'like', '%'.$search.'%')
        // //     ->select('id', 'name', 'description', 'product_image', 'brand');
        // //     }))
        // //     ->with('porte')
        // //     ->orderBy('created_at', 'desc')
        // //     ->paginate();
        // $ofertas = Oferta::join("products", "ofertas.product_id", "=", "products.id")
        // ->select('ofertas.*',"products.name", "products.product_image", "products.id", "products.brand", "products.EAN13_individual" )
        // // ->where("alumnos.nombre", "=", $this->search)
        // ->where('products.brand', 'like', '%'.$search.'%')
        // ->get();

        // dd($ofertas);
    }

    public function render()
    {
        // $ofertas = Oferta::with(array('product'=>function($query){
        //     $query->select('id','name', 'product_image', 'brand', );
        //     }))
        //     ->with('porte')
        //     ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        //     ->paginate($this->perPage);

        // $this->products =  Product::search($this->search);

        $ofertas = Oferta::join("products", "ofertas.product_id", "=", "products.id")
        ->select('ofertas.*',"products.name", "products.product_image", "products.brand", "products.EAN13_individual" )
        // ->where("alumnos.nombre", "=", $this->search)
        ->where('products.brand', 'like', '%'.$this->search.'%')
        ->orWhere('products.EAN13_individual', 'like', '%'.$this->search.'%')
        ->orWhere('products.name', 'like', '%'.$this->search.'%')
        ->with('porte')
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);

        $this->products =  Product::search($this->search)
                ->select('id', 'name', 'description', 'product_image', 'brand')
                ->with('oferta')
                ->with('porte')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage);
        // dd($ofertas);

        return view('livewire.all-products', [
            // 'products' => $this->products,
            'ofertas' => $ofertas
        ]);
    }

}
