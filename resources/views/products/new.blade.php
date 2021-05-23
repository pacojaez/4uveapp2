<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Añadir nuevo Producto')  }}
        </h2>
    </x-slot>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session()->has('message'))
    <div class="relative flex flex-col py-5 pl-6 pr-8 bg-white rounded-md shadow sm:flex-row sm:items-center sm:pr-6 alert-success">
        <div class="flex flex-row items-center w-full pb-4 border-b sm:border-b-0 sm:w-auto sm:pb-0">
            <div class="text-green-500">
                <svg class="w-6 h-6 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="ml-3 text-sm font-medium">{{ session('message') }}</div>
        </div>
        {{-- <div class="mt-4 text-sm tracking-wide text-gray-500 sm:mt-0 sm:ml-4">Your Payment was Successful. You can use our services!</div> --}}
        <div class="absolute ml-auto text-gray-400 cursor-pointer sm:relative sm:top-auto sm:right-auto right-4 top-4 hover:text-gray-800">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
        {{-- <button @click="$dispatch('flash', { level: '', msg: '' })" class="px-4 py-2 font-bold rounded">
            Clear Flash
          </button> --}}
    </div>
    @endif
    <div class="container mx-auto mt-2">
        @livewire('new-product')
    </div>
</x-app-layout>
