<div>
    <x-jet-nav-link href="{{ route('cart') }}" class="m-0 text-lg text-red-600 font-title md:-m-3">
        <img alt="carrito de la compra" class="object-cover object-center h-10 m-1"
                src="{{asset('storage/images/elementos/carrito.jpg')}}" />
        {{ __('Tu carrito') }} ({{ $count }})
    </x-jet-nav-link>
</div>
