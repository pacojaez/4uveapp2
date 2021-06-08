
    <div class="w-5/6 m-auto">
        <div class="max-w-full p-5 mx-2 my-2 text-4xl font-bold text-center border-2 rounded">
            @if(Auth::user())
            <h3>TU COMPRA {{ Auth::user()->name }}</h3>
            @else
            <h3>TU COMPRA</h3>
            @endif
        </div>
        <div class="max-w-full p-5 mx-2 my-2 border-2 rounded">
            {{-- @if ($content->count() > 0) --}}
            @if( count($content) > 0 )
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                           PRODUCTO
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            PRECIO UNIDAD
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            UNIDADES
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            SUBTOTAL
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            Acciones<span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $id => $item)
                    <tr>
                        <td><p class="m-2 text-xl text-left">
                            {{ $item->get('name') }}
                            </p>
                        </td>
                        <td><p class="m-2 text-xl text-center">
                            {{ $item->get('price') }} €
                            </p>
                        </td>
                        <td><p class="m-2 text-xl text-center">
                            {{ $item->get('quantity') }}
                            </p>
                        </td>
                        <td><p class="m-2 text-xl text-center">
                            {{ $item->get('quantity')*$item->get('price') }} €
                            </p>
                        </td>
                        <td>
                            <button class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300" wire:click="updateCartItem({{ $id }}, 'minus')"> - </button>
                            <button class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300" wire:click="updateCartItem({{ $id }}, 'plus')"> + </button>
                            <button class="p-2 text-sm bg-red-500 border-2 border-red-500 rounded hover:border-red-600 hover:bg-red-600" wire:click="removeFromCart({{ $id }})">Eliminar</button>
                        </td>
                    </tr>
                    {{-- <p class="m-4 text-2xl text-right">
                        {{ $item->get('name') }} x {{ $item->get('quantity') }}
                        <button class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300" wire:click="updateCartItem({{ $id }}, 'minus')"> - </button>
                        <button class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300" wire:click="updateCartItem({{ $id }}, 'plus')"> + </button>
                        <button class="p-2 text-sm bg-red-500 border-2 border-red-500 rounded hover:border-red-600 hover:bg-red-600" wire:click="removeFromCart({{ $id }})">Remove</button>
                    </p>
                    <hr> --}}
                    @endforeach
                </tbody>
            </table>
            <hr class="my-2">
            <p class="mb-2 text-xl font-semibold text-center">Total: <span class="mb-2 text-2xl font-bold">{{ $total }}</span>  €</p>
            @if(Auth::user())
            <div class="mb-2 -mx-3 md:flex">
                <button class="w-1/2 p-2 mx-2 bg-red-500 border-2 border-red-500 rounded hover:border-red-600 hover:bg-red-600" wire:click="clearCart">Vaciar el carrito</button>
                <button class="w-1/2 p-2 mx-2 bg-green-500 border-2 border-green-500 rounded hover:border-green-600 hover:bg-green-600" wire:click="checkOut">Realizar el pedido</button>
            </div>
            @else
            <div class="max-w-full p-5 mx-2 my-2 text-2xl text-center border-2 rounded">
            {{-- <div class="mb-2 -mx-3 text-center md:flex"> --}}
              <h4 class="font-semibold ">Debes estar registrado para formalizar el pedido.</h4>
              <x-jet-nav-link href="{{ route('register') }}" class="px-8 py-4 mt-2 font-normal tracking-wide text-white transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-600 to-blue-700 focus:outline-none hover:shadow-lg hover:from-blue-700">
                {{ __('Registrate') }}
            </x-jet-nav-link>
            </div>
            @endif
            {{-- <button class="w-1/2 p-2 bg-red-500 border-2 border-red-500 rounded hover:border-red-600 hover:bg-red-600" wire:click="clearCart">Vaciar el carrito</button>
            <button class="w-1/2 p-2 bg-green-500 border-2 border-green-500 rounded hover:border-green-600 hover:bg-green-600" wire:click="clearCart">Realizar el pedido</button> --}}
            @else
            <p class="mb-2 text-3xl text-center">El carrito está vacio!</p>
                @if($confirmedMessage)
                    <p class="mb-2 text-2xl text-center">Hemos recibido tu pedido. </p>
                    <p class="mb-2 text-2xl text-center">En breve recibirás un mail con las condiciones más favorables que hemos obtenido para el envio!</p>
                    <p class="mb-2 text-2xl text-center">Muchas Gracias por confiar en 4uve!</p>
                @else
                {{-- <p class="mb-2 text-2xl text-center">Hemos vaciado tu carrito. </p> --}}
                <p class="mb-2 text-2xl text-center">Muchas Gracias por tu interés en 4uve!</p>
                @endif
            @endif
        </div>
        {{-- <script>
            window.addEventListener('refresh-page', event => {
               window.location.reload(true);
            })
          </script> --}}
    </div>
    {{-- <div>
        <div class="w-5/6 mx-auto">
            <div class="my-6 bg-white rounded shadow-md">
                @if( count($cart['products']) > 0)
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                PRODUCTO
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                CODIGO PRODUCTO
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                DIMENSIONES
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                PESO
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                PRECIO
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart['products'] as $product)
                        <tr class="hover:bg-grey-lighter">
                            <td class="px-6 py-4 border-b border-grey-light">
                                <span class="w-20 h-20">
                                    <img alt="{{ $product->name }}" class="object-cover object-center w-20 h-20"
                                    src="{{asset('storage/images/products/'.$product->product_image)}}" />
                                </span>
                                {{ $product->name }}
                            </td>
                            <td class="px-6 py-4 border-b border-grey-light">{{ $product->EAN13_individual }}</td>
                            <td class="px-6 py-4 border-b border-grey-light">{{ $product->dimensions_boxes }} mm </td>
                            <td class="px-6 py-4 border-b border-grey-light">
                                <span>Unidades: {{ $product->pack_units }}</span>
                                <br>
                                Peso: {{ $product->weight }} Kgs
                                <br>
                                Dimesiones: {{ $product->dimensions_boxes }} mm
                            </td>
                            <td class="px-6 py-4 border-b border-grey-light"> {{ $product->invoice_cost_price }} € </td>
                            <td class="px-6 py-4 border-b border-grey-light">
                                <a wire:click="removeFromCart({{ $product->id }})"
                                    class="px-3 py-1 text-xs font-bold text-green-600 rounded cursor-pointer bg-green hover:bg-green-dark">Remove</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="w-full p-6 text-right">
                    <button wire:click="checkout()"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Checkout
                    </button>
                </div>
                @else
                <div class="w-full h-full p-6 text-center border-collapse">
                    <span class="text-lg">¡TU CARRITO ESTÁ VACIO!</span>
                </div>
                @endif
            </div>
        </div>
    </div> --}}
