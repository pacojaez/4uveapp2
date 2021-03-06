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

        $this->products =  Product::where('active', 'like', 0)->paginate(10);
        // dd(gettype($this->products));
        // dd($this->products);

        return view('livewire.inactive-products', [
            'products' => $this->products,
        ]);
    }

}
