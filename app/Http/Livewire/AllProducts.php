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
    public $search = '';

    public function mount(){
        $this->products = Product::search($this->search)->paginate(15);
    }

    public function render()
    {
        // dd($this->search);
        return view('livewire.all-products', [
            'products' => $this->products,
        ]);
    }

}
