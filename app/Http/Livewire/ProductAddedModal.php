<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductAddedModal extends Component
{
    public $product;

    protected function getListeners()
    {
        return ['postAdded' => 'showProductStored'];
    }


    public function showProductStored (Product $product)
    {
        dd('hello');
        $this->product = $product;
    }

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount($product)
    {

        $this->product = $product;

        // dd($this->order);
    }

    public function render()
    {
        return view('livewire.product-added-modal', [
            'product' => $this->product
        ]);
    }
}
