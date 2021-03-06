<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Oferta;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;

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

    public function delete($id){


    }

    public function destroy($id){


    }

    public function render()
    {
        if(Auth::user()->is_admin){
            $this->ofertas =  Oferta::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);

            // dd($this->ofertas);
        }else{
            $this->ofertas =  Oferta::where('user_id', '=', Auth::user()->id)->get();
            // dd($this->ofertas);
        }


        return view('livewire.ofertas-table', [
            'ofertas' => $this->ofertas,
        ]);
    }
}
