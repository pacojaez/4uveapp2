<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\OrderItem;
use App\Models\Order;

class OrderModal extends ModalComponent
{

    protected $listeners = ['openModal'];
    public $order;

    public function mount( $order ){

        $this->order = $order;

        // dd($this->order);
    }

    public function render()
    {
        // $orderItems = OrderItem::where('order_id', 'like', $id)->get();
        // $order = Order::where('id', 'like', $id);

        return view('livewire.order-modal', [
            // 'orderItems' => $orderItems,
            // 'order' => $order
        ]);
    }
}
