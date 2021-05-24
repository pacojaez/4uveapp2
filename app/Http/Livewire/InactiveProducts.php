<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Support\Collection;

class InactiveProducts extends Component
{
    use WithPagination;

    protected $products;
    public $perPage= 20;
    public $searchInactive;
    public $orderBy = 'id';
    public $orderAsc = false;

    public function mount()
    {

    }


    public function render()
    {

        $this->products =  Product::inactive($this->searchInactive)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage);

        return view('livewire.inactive-products', [
            'products' => $this->products,
        ]);
    }

}
