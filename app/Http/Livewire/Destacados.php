<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Destacados extends Component
{
    public function render()
    {
        return view('livewire.destacados', [
            'products' => Product::take(6)->select('id', 'name', 'subcategorie_id', 'provincia_recogida', 'description', 'product_image', 'offer_prize')->get(),
        ]);
    }
}
