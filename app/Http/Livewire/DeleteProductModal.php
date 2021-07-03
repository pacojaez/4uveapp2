<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Product;
use App\Models\Oferta;
use App\Models\OrderItem;


class DeleteProductModal extends ModalComponent
{

    public $product_id;

    protected $listeners = ['destroyProduct' => 'destroy'];

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount( $product_id )
    {

        $this->product_id = $product_id;
        // dd($this->oferta);
    }

    public function render()
    {

        return view('livewire.delete-product-modal', [
            'product_id' => $this->product_id,
        ]);
    }

    public function destroy(){

        Product::findOrFail($this->product_id)->delete();
        Oferta::where('product_id', 'like', $this->product_id)->delete();
        OrderItem::where('product_id', 'like', $this->product_id)->delete();


            session()->flash('product_deleted', 'Producto eliminado definitivamente.');
            redirect()->to('/products');

    }
}
