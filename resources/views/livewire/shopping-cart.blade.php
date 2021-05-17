<x-guest-layout>
    @livewire('guest-navbar')
    <div>
        <div class="w-2/3 mx-auto">
            <div class="my-6 bg-white rounded shadow-md">
                @if(count($cart['products']) > 0)
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                Name</th>
                            <th
                                class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                Price</th>
                            <th
                                class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart['products'] as $product) --}}
                        <tr class="hover:bg-grey-lighter">
                            <td class="px-6 py-4 border-b border-grey-light">{{ $product->name }}</td>
                            <td class="px-6 py-4 border-b border-grey-light">{{ $product->description }}</td>
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
                <div class="w-full p-6 text-center border-collapse">
                    <span class="text-lg">¡Your cart is empty!</span>
                </div>
                @endif
            </div>
        </div>
    </div>


</x-guest-layout>
