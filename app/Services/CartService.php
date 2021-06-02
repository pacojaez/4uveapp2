<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Session\SessionManager;

class CartService
{
    const MINIMUM_QUANTITY = 1;
    const DEFAULT_INSTANCE = 'shopping-cart';

    protected $session;
    protected $instance;

    public $items;

    /**
     * Constructs a new cart object.
     *
     * @param Illuminate\Session\SessionManager $session
     */
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
        // dd($this->session);
    }

    /**
     * Adds a new item to the cart.
     *
     * @param string $id
     * @param string $name
     * @param string $price
     * @param string $quantity
     * @param array $options
     * @return void
     */
    public function add ($id, $name, $price, $quantity, $options = []): void
    {
        $cartItem = $this->createCartItem($name, $price, $quantity, $options, $id);

        $content = $this->getContent();
        // dd($content);
        if ($content->has($id)) {
            $cartItem->put('quantity', $content->get($id)->get('quantity') + $quantity);
        }

        $content->put($id, $cartItem);
        // dd($content);
        $this->session->put(self::DEFAULT_INSTANCE, $content);

        $this->items();
    }

    /**
     * Updates the quantity of a cart item.
     *
     * @param string $id
     * @param string $action
     * @return void
     */
    public function update(string $id, string $action): void
    {
        $content = $this->getContent();

        if ($content->has($id)) {
            $cartItem = $content->get($id);

            switch ($action) {
                case 'plus':
                    $cartItem->put('quantity', $content->get($id)->get('quantity') + 1);
                    break;
                case 'minus':
                    $updatedQuantity = $content->get($id)->get('quantity') - 1;

                    if ($updatedQuantity < self::MINIMUM_QUANTITY) {
                        $updatedQuantity = self::MINIMUM_QUANTITY;
                    }

                    $cartItem->put('quantity', $updatedQuantity);
                    break;
            }

            $content->put($id, $cartItem);
            // dd($content);

            $this->session->put(self::DEFAULT_INSTANCE, $content);
            $content = $this->getContent();
        }
        $this->items();
    }

    /**
     * Removes an item from the cart.
     *
     * @param string $id
     * @return void
     */
    public function remove(string $id): void
    {
        $content = $this->getContent();

        if ($content->has($id)) {
            $this->session->put(self::DEFAULT_INSTANCE, $content->except($id));
        }
        $this->items();
    }

    /**
     * Clears the cart.
     *
     * @return void
     */
    public function clear(): void
    {

        $this->session->forget(self::DEFAULT_INSTANCE);
        $this->items();
    }

    /**
     * Returns the content of the cart.
     *
     * @return Illuminate\Support\Collection
     */
    public function content(): Collection
    {
        return is_null($this->session->get(self::DEFAULT_INSTANCE)) ? collect([]) : $this->session->get(self::DEFAULT_INSTANCE);
    }
    /**
     * Retorna el total de items del carrito
     *
     * @return
     *
     */
    public function items(): string
    {
        $content = $this->getContent();

        $this->items = $content->reduce(function ($quantity, $item ){
            return $quantity += $item->get('quantity');
        });
        if($this->items == null){
            return $this->items = 0;
        }else{
            return $this->items;
        }
    }

    /**
     * Returns total price of the items in the cart.
     *
     * @return string
     */
    public function total(): string
    {
        $content = $this->getContent();

        $this->items = $content->reduce(function ($quantity, $item ){
            return $quantity += $item->get('quantity');
        });

        // dd('items: '.$items);

        $total = $content->reduce(function ($total, $item) {
            return $total += $item->get('price') * $item->get('quantity');
        });

        return number_format($total, 2);
    }

    /**
     * Returns the content of the cart.
     *
     * @return Illuminate\Support\Collection
     */
    protected function getContent(): Collection
    {
        return $this->session->has(self::DEFAULT_INSTANCE) ? $this->session->get(self::DEFAULT_INSTANCE) : collect([]);
    }

    /**
     * Creates a new cart item from given inputs.
     *
     * @param string $name
     * @param string $price
     * @param string $quantity
     * @param array $options
     * @return Illuminate\Support\Collection
     */
    protected function createCartItem(string $name, string $price, string $quantity, array $options, string $id): Collection
    {
        $price = floatval($price);
        $quantity = intval($quantity);

        if ($quantity < self::MINIMUM_QUANTITY) {
            $quantity = self::MINIMUM_QUANTITY;
        }

        return collect([
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'options' => $options,
            'id' => $id
        ]);

        $this->items();
    }
}
