<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar la Oferta con ID: ')  }} {{ $oferta->id }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-2">
        @livewire('show-edit-oferta', [$oferta] )
    </div>
</x-app-layout>
