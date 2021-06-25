<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Oferta;

class OfertasTable extends Component
{
    use WithPagination;

    public $contentIsVisible= false;
    protected $ofertas;
    public $perPage= 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = false;
    public $noOfertas;

    public function render()
    {
        $this->ofertas =  Oferta::search($this->search)
                            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                            ->paginate($this->perPage);

        return view('livewire.ofertas-table', [
            'ofertas' => $this->ofertas,
        ]);
    }
}
