<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Oferta;

class Destacados extends Component
{
    public function render()
    {

        /**
         * Elegimos campos de la DB de Producto para mostrar en la vista y no traer toodo el Producto
         * with() y la function($query) eligen los campos de producto que necesitamos.
         * take() limita a 6 como primer argumento el numero de items random que saca de Ofertas
         */
        $ofertas = Oferta::with(array('product'=>function($query){
                    $query->select('id','name', 'product_image', 'brand', ); }))
                    ->take(6)
                    ->get(
                        // ['id','offer_prize', 'invoice_cost_price', 'provincia_recogida',
                        // 'categoria_oferta']
                    );

        return view('livewire.destacados', [
            'ofertas' => $ofertas,
        ]);
    }
}
