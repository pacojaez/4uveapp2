<x-guest-layout>
    {{-- @livewire('guest-navbar') --}}
    <div>
        <h2 class="mt-4 ml-12 text-xl font-semibold leading-tight text-gray-800">
        {{ __('Todos nuestros Productos')  }}
        </h2>
        @livewire('all-products')
    </div>
</x-guest-layout>
