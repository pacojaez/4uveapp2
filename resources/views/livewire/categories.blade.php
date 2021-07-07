<div>
    <h2 class="mt-4 ml-12 text-xl font-semibold leading-tight text-gray-800">
        Productos en la categoría {{  $title }}:
    </h2>
    <!-- BUSCADOR -->
    {{-- <div class="space-x-8 text-center justify-items-center sm:-my-px sm:ml-10 sm:flex sm:w-full">
        <div class="relative w-1/2">
            <input type="text" wire:model.debounce.500ms="search" type="search"
                class="w-full p-2 pl-8 bg-gray-200 border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent"
                placeholder="Buscar Productos..." />
            <svg class="w-4 h-4 absolute left-2.5 top-3.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        {{-- <input wire:model.debounce.500ms="search" type="search" class="max-w-md px-3 mt-2 mb-2 ml-20 text-xl rounded shadow-lg sm:max-w-1/2 h-5/6 focus:outline-none focus:shadow-outline" placeholder="Buscar Productos...">
                <svg class="w-4 h-4 absolute left-2.5 top-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
    </div> --}}
    @if ($ofertas)
    <div class="grid grid-cols-12 gap-6 p-2 m-5 bg-yellow-300 rounded shadow-sm">
        @foreach($ofertas as $oferta)
        <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
            href="{{ route('singleoferta', ['id' => $oferta->id]) }}">

            <div class="p-5 shadow-2xl">
                <div class="flex justify-between">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg> --}}
                    @if($oferta->categoria_oferta == 'Venta Unitaria' || $oferta->categoria_oferta == 'Venta Por Lotes')
                    <div class="flex h-6 px-2 text-sm font-semibold text-white bg-green-500 rounded-full justify-items-center">
                        <span class="flex items-center">
                            {!! $oferta->categoria_oferta !!}
                        </span>
                    </div>
                    @else
                    <div class="flex h-6 px-2 text-sm font-semibold text-white bg-red-500 rounded-full justify-items-center">
                        <span class="flex items-center">
                            {!! $oferta->categoria_oferta !!}
                        </span>
                    </div>

                    @endif
                    @if($oferta->invoice_cost_price)
                    <div
                        class="flex h-10 px-2 text-sm font-semibold text-white bg-green-500 rounded-full justify-items-center">
                        <span class="flex items-center">
                            Ahorro:
                            {!! number_format((float)(100 -($oferta->offer_prize*100)/$oferta->invoice_cost_price), 2) !!} %
                        </span>
                    </div>
                    @endif
                </div>
                @if($oferta->product->product_image)
                <div class="md:flex-shrink-0">
                    <img class="object-cover w-full h-48 md:w-48"
                        src="{{asset('storage/images/products/'.$oferta->product->product_image)}}"
                        alt="Man looking at item at a store">
                </div>
                @else
                <div class="md:flex-shrink-0">
                    <img class="object-cover w-full h-48 md:w-48"
                        src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                        alt="Man looking at item at a store">
                </div>
                @endif
                <div class="flex-1 w-full ml-2">
                    <div>
                        <div class="mt-1 text-base font-bold leading-4 text-gray-500">Precio Mercado: <span class="line-through">{{$oferta->invoice_cost_price}} €</span>
                        </div>
                        <div class="mt-1 text-xl font-bold leading-8 text-gray-800">Oferta: {{$oferta->offer_prize}} €</div>
                        <div class="mt-1 text-base font-bold text-gray-800">{{$oferta->product->name}}</div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div class="w-full p-2 mt-5 text-xl font-bold text-center">
        <h3 class="font-bold">AÚN NO TENEMOS PRODUCTOS EN ESTA CATEGORÍA</h3>
    </div>
    @endif

</div>
