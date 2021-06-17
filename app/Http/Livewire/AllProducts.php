<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
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

    public function render()
    {

        $this->products =  Product::search($this->search)
                ->select('id', 'name', 'description', 'product_image', 'offer_prize',
                'embalaje_original', 'porte_id', 'invoice_cost_price')
                ->with('oferta')
                ->with('porte')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage);
        // dd($this->products);

        return view('livewire.all-products', [
            'products' => $this->products,
        ]);
    }

}
