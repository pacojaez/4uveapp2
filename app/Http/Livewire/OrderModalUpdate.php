<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\OrderItem;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderModalUpdate extends ModalComponent
{

    public $order;
    public $editstatus;

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount($order)
    {
        $this->order = $order;
    }

    public function render()
    {
        $orderItems = OrderItem::where('order_id', 'like', $this->order['id'])->get();

        return view('livewire.order-modal-update', [
            'orderItems' => $orderItems,
            'order' => $this->order
        ]);
    }

    public function update(){

        if(Auth::user()->is_admin && $this->editstatus){
            Order::where('id', $this->order['id'])
                    ->update(['status' => $this->editstatus]);

            $this->emit('closeModal');

            $this->emit('orderUpdated');
        }

    }

    public function updateOrderStatus(){
        Order::where('id', $this->order['id'])
        ->update(['status' => $this->editstatus]);
    }
}
