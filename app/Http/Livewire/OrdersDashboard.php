<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrdersDashboard extends Component
{

    protected $orders;
    protected $orderItems= [];

    // public function emitToModal($id){
    //     dd($id);
    // }

    public function mount(){

        if(Auth::user()->is_admin){
            $this->orders = Order::orderBy('created_at', 'DESC')->get();
        }else{
            $this->orders = Order::where('user_id', 'like', Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->get();
        }

        // dd(Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.orders-dashboard', [
            'orders' => $this->orders,
        ]);
    }
}
