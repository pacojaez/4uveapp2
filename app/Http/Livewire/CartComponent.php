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

    // public $abandoned = false;

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
            // 'abandoned' => $this->abandoned,
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

    /**
     * RSend a mail to customer and admin to fionish the checkout.
     *
     * @return void
     */
    public function checkOut()
    {
        $user_id = Auth::user()->id;
        $userEmail = Auth::user()->email;
        $total_units = Cart::items();

        // dd($total_units);

        $this->total = Cart::total();
        $this->content = Cart::content();
        $this->emitTo('nav-cart', 'refresh');

        // dd($this->total);

        $this->newOrder = Order::create([
            'status' => 'Pendiente de confirmación',
            'user_id' => $user_id,
            'units' => $total_units,
            'total_factura' => $this->total
        ]);

        //
         foreach( $this->content as $key => $value ){
            // dd(($value['name']));
            OrderItem::create([
                'order_id' => $this->newOrder->id,
                'product_id' => $key,
                'units' => $value['quantity'],
                'total_items' => $value['quantity'],
                'unit_price' => $value['price'],
                'user_id' => $user_id,
                'subtotal' => $value['quantity'] * $value['price']
           ]);
        };

        $this->clearCart();

        SendEMailController::orderCreated($this->content, $userEmail, $this->newOrder);

        $this->confirmedMessage = true;

        //Mandar Mail de confirmacion de recepción del pedido



    }
}




// namespace App\Http\Livewire;

// use App\Facades\Cart as CartFacade;
// use Livewire\Component;

// class Cart extends Component
// {
//     public $cart;

//     public function mount(): void
//     {
//         $this->cart = CartFacade::get();
//         dd($this->cart);
//     }

//     public function render()
//     {
//         $this->cart = CartFacade::get();
//         // $this->cart = ['product', 1];
//         return view('livewire.cart', [
//             'cart' => $this->cart,
//         ]);
//     }

//     public function removeFromCart(string $product_id): void
//     {
//         dd($product_id);
//         CartFacade::remove($product_id);
//         $this->cart = CartFacade::get();
//         $this->emit('productRemoved');
//     }

//     public function checkout(): void
//     {
//         CartFacade::clear();
//         $this->emit('clearCart');
//         $this->cart = CartFacade::get();
//     }
// }
