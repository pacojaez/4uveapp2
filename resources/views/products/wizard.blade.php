<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crear un Producto o una Oferta')  }}
        </h2>
    </x-slot>
    @livewire('wizard')
</x-app-layout>
