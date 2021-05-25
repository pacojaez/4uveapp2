<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tabla de Productos')  }}
        </h2>
        {{-- <x-jet-nav-link href="{{ route('products.inactive') }}" class="m-5 font-bold">
            {{ __('Productos Pendientes de Revisión')  }}
        </x-jet-nav-link> --}}
    </x-slot>
    <div class="container mx-auto mt-2">
        @livewire('products-table')

    </div>
</x-app-layout>
