<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Order;
use App\Models\OrderItem;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    protected $order;

     /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    protected $orderItems;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Order $order)
    {
        $this->order = $order;
        $this->orderItems = OrderItem::where('order_id', 'like', $this->order->id)->get();
        // dd($this->orderItems);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order-created')
        ->with([
            'order' => $this->order,
            'orderItems' => $this->orderItems,
        ]);
    }
}
