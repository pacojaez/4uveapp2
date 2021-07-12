<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SendEMailController;

class CartComponent extends Component
{
    protected $total;
    protected $content;
    protected $orderItem;
    protected $newOrder;
    protected $oferta_id;

    // public $abandoned = false;  Property to remarketing TODO

    public $confirmedMessage = false;

    protected $listeners = [
        'productAddedToCart' => 'updateCart',
    ];

    /**
     * Mounts the component on the template.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->confirmedMessage = false;
        $this->abandoned = false;
        $this->updateCart();
    }

    /**
     * Renders the component on the browser.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        // $this->dispatchBrowserEvent('refresh-page');

        return view('livewire.cart', [
            'total' => $this->total,
            'content' => $this->content,
            // 'abandoned' => $this->abandoned,   Property to remarketing TODO
        ]);
    }

    /**
     * Removes a cart item by id.
     *
     * @param string $id
     * @return void
     */
    public function removeFromCart(string $id): void
    {
        Cart::remove($id);
        $this->updateCart();
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Clears the cart content.
     *
     * @return void
     */
    public function clearCart(): void
    {
        Cart::clear();
        $this->updateCart();
        $this->confirmedMessage = false;
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Updates a cart item.
     *
     * @param string $id
     * @param string $action
     * @return void
     */
    public function updateCartItem(string $id, string $action): void
    {
        Cart::update($id, $action);
        $this->updateCart();
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Rerenders the cart items and total price on the browser.
     *
     * @return void
     */
    public function updateCart()
    {

        $this->total = Cart::total();
        $this->content = Cart::content();
        $this->emitTo('nav-cart', 'refresh');

    }


    public function checkOut()
    {
        $user_id = Auth::user()->id;
        $userEmail = Auth::user()->email;
        $total_units = Cart::items();

        //Recogemos los valores del Cart en variables para poder generar un nuevo registro en la DB

        $this->total = Cart::total();
        $this->content = Cart::content();
        $this->emitTo('nav-cart', 'refresh');

        //Crear una nueva Order para obtner el id y poder referenciar cada OrderItem a él

        $this->newOrder = Order::create([
            'status' => 'Pendiente de confirmación',
            'user_id' => $user_id,
            'units' => $total_units,
            'total_factura' => $this->total
        ]);

        //crear cada OrderItem en la DB
         foreach( $this->content as $key => $value ){

            OrderItem::create([
                'order_id' => $this->newOrder->id,
                'units' => $value['quantity'],
                'total_items' => $value['quantity'],
                'unit_price' => $value['price'],
                'user_id' => $user_id,
                'subtotal' => $value['quantity'] * $value['price'],
                'oferta_id' => $key,
           ]);
        };
        //borrar el carrito tras la confirmacion de que se ha creado
        $this->clearCart();

        //Mandar Mail de confirmacion de recepción del pedido
        SendEMailController::orderCreated($this->content, $userEmail, $this->newOrder);

        /**
         * TO DO
         * Send a mail to customer and admin to finish the checkout.
         *
         * @return void
         */

        $this->confirmedMessage = true;





    }
}
