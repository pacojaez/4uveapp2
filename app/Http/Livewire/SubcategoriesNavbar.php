<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subcategorie;

class SubcategoriesNavbar extends Component
{   

    protected $subcategories;

    public function mount($id){
        $this->subcategories = Subcategorie::where('category_id', '=', $id)->get();
    }

    public function render()
    {       
        // dd($this->subcategories);
        return view('livewire.subcategories-navbar', ['subcategories' => $this->subcategories]);
    }
}
