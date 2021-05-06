<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SingleProductCard extends Component
{   
    
    public $product;
    
    public function mount($id){
        // dd($id);
        $this->product = Product::findOrFail($id);
        // dd($this->product);
    }

    public function render()
    {   
        // $this->product = Product::findOrFail($id);
        return view('livewire.single-product-card', ['product' => $this->product]);
    }
}
