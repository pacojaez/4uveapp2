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
    public function render()
    {
        $this->products =  Product::search($this->search)
                            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                            ->paginate($this->perPage);

        return view('livewire.products-table',[
            'products' => $this->products
        ]);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
        Product::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $this->contentIsVisible = true;

        $record = Product::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
        if ($this->selected_id) {
            $record = Product::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Product::where('id', $id);
            $record->delete();
        }
    }


}
