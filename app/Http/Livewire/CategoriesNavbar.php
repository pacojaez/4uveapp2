<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class CategoriesNavbar extends Component
{

    public $categories;

    public function mount(){
        $this->categories = Categorie::all();
    }

    public function render()
    {   
        // dd($this->categories);
        return view('livewire.categories-navbar', ['categories' => $this->categories]);
    }
}

