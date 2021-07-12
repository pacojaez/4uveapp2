<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductsTable extends Component
{
    use WithPagination;

    public $contentIsVisible= false;
    protected $products;
    public $perPage= 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = false;
    public $noProducts;

    public $data, $name, $email, $password, $selected_id;
    public $updateMode = false;

    public function updateMode(){
        $this->updateMode = false;
        $this->resetInput();
    }

    public function toggleContent(){
        $this->contentIsVisible = !$this->contentIsVisible;
    }


    public function mount(){

    }


    public function render()

    /**
     * WE ONLY NEED TO RENDER THE VIEW WITH THE DATA
     * ALL THE LOGIC IN THE LIVEWIRE WIZARD COMPONENT
     */
    {
        $this->products =  Product::search($this->search)
                            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                            ->paginate($this->perPage);

        return view('livewire.products-table',[
            'products' => $this->products
        ]);
    }


}
