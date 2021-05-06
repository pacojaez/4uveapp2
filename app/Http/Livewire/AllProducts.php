<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AllProducts extends Component
{
    use WithPagination;
    
    protected $products;

    public function mount(){
        // $this->products = Product::paginate(20);
    }

    // $this->posts =  Post::search($this->search)
    //                         ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
    //                         ->simplePaginate($this->perPage);

    //     return view('livewire.show-posts', [
    //         'posts' => $this->posts,
    //     ]);
    
    public function render()
    {   
        // dd($this->products);
        return view('livewire.all-products', [
            'products' => $this->products = Product::paginate(20),
        ]);
    }
}
