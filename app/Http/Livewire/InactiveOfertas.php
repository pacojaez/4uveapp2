<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Oferta;
use Livewire\WithPagination;

class InactiveOfertas extends Component
{
    use WithPagination;

    protected $products;
    public $perPage= 20;
    public $searchInactive;
    public $orderBy = 'id';
    public $orderAsc = false;
    public $noOfertas;

    public function render()
    {
        $this->ofertas =  Oferta::where('active', 'like', 0)->paginate(10);

        return view('livewire.inactive-ofertas', [
            'ofertas' => $this->ofertas
        ]);
    }
}
