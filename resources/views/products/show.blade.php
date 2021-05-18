<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar el Producto con ID: ')  }} {{ $product->id }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-2">
        @livewire('show-edit-product', [$product] )
    </div>
</x-app-layout>
