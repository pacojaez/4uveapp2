<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\OrderItem;
use App\Models\Order;


class OrderModal extends ModalComponent
{

    public $order;

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount($order)
    {

        $this->order = $order;

        // dd($this->order);
    }

    public function render()
    {
        $orderItems = OrderItem::where('order_id', 'like', $this->order['id'])->get();

        return view('livewire.order-modal', [
            'orderItems' => $orderItems,
            'order' => $this->order
        ]);
    }
}
