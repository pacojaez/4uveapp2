{{-- <div>
    <h3 class="text-lg font-medium leading-6 text-gray-900">
        PEDIDO: {{ $order->id }}
    </h3>

    @foreach ($orderItems as $item )
    <div class="p-4 bg-white border-b sm:px-6 sm:py-4 border-gray-150">



    </div>
    <div class="px-4 bg-white sm:p-6">
        <div class="space-y-6">
            {{ $content }}
        </div>
    </div>

    <div class="px-4 pb-5 bg-white sm:px-4 sm:flex">
        {{ $buttons }}
    </div>

    @endforeach

</div> --}}

<x-modal>
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋
    </x-slot>

    <x-slot name="buttons">
        Buttons go here...
    </x-slot>
</x-modal>
