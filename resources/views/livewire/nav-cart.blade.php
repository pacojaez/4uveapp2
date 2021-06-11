<div>
    <x-jet-nav-link href="{{ route('cart') }}" class="m-5 text-lg text-red-600 font-title">
        <img alt="carrito de la compra" class="object-cover object-center h-10 m-2"
                src="{{asset('storage/images/elementos/carrito.jpg')}}" />
        {{ __('Tu carrito') }} ({{ $count }})
    </x-jet-nav-link>
</div>
