<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\Oferta;
use App\Models\Subcategorie;
use App\Models\Portes;

class CreateProductStep1 extends Component
{
    public $productslist;
    public $search;
    public $selectedProduct;


    public function mount(){
        $this->subcategories = Subcategorie::all();
        $this->portes = Portes::all();
    }


    public function render()
    {
        $this->productslist = Product::search($this->search)->get();


        if($this->selectedProduct != null){
            $selected = Product::findOrFail($this->selectedProduct);
        }else{
            $selected = '';
        }

        if($this->productslist == ''){
            $this->clearSearch();
        }

        return view('livewire.create-product-step1', [
            'productslist' => $this->productslist,
            'selected' => $selected,
            'subcategories' => $this->subcategories,
            'portes' => $this->portes,
        ]);
    }
}
