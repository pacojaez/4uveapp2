<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class CartComponent extends Component
{
    protected $total;
    protected $content;

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

        $this->updateCart();
    }

    /**
     * Renders the component on the browser.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        // dd($this->content);

        return view('livewire.cart', [
            'total' => $this->total,
            'content' => $this->content,
            // 'product' => Product::first()->get()
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
        $this->emitTo('guest-nav-bar', 'productAdded');
        Cart::items();
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
        Cart::items();
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
        // dd($one);
        $this->updateCart();
        $this->emitTo('guest-nav-bar', 'productAdded');
        Cart::items();
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
        Cart::items();
        // dd(Cart::content());
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
