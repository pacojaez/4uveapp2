<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategorie;
use Illuminate\Support\Facades\DB;

class Categories extends Component
{
    protected $products;
    protected $title;
    // public $search = '';

    public function mount($id){
        // dd($id);
        $this->products = Product::where('subcategorie_id', '=', $id)->get();
        $this->title = Subcategorie::where('id', '=', $id)->get();


        // if( $this->search != '' ){
        //     $this->products = Product::
        //                                 where('subcategorie_id', '=', $id)
        //                                 ->where('name', 'like', '%'.$this->search.'%')
        //                                 ->get();
            // dd($this->title);
            // $this->title = Subcategorie::where('id', '=', $id)->get();
        // }

    }

    public function render()
    {
        // dd($this->title);
        return view('livewire.categories', [
            'products' => $this->products,
            'title' => $this->title[0]->name,
        ]);
    }
}
