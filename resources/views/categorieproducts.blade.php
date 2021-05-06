<x-guest-layout>
    @livewire('guest-navbar')
    @livewire('categories', ['id' => $id])
</x-guest-layout>