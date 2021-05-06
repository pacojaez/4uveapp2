<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategorie;

class Categories extends Component
{
    protected $products;
    protected $title;

    public function mount($id){
        // dd($id);
        $this->products = Product::where('subcategorie_id', '=', $id)->get();
        $this->title = Subcategorie::where('id', '=', $id)->get();

    }
    
    public function render()
    {   
        
        return view('livewire.categories', [
            'products' => $this->products,
            'title' => $this->title[0]->name,
        ]);
    }
}
