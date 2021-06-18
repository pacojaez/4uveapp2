<div>
    <div class="container p-8 mx-auto">
        <div class="flex w-full">
            <div class="flex flex-col items-center max-w-full mx-auto mt-8">
                <h1 class="w-full text-3xl text-red-600 font-title">ALGUNAS DE NUESTRAS OFERTAS:</h1>
            </div>
        </div>
        <section class="flex flex-row flex-wrap mx-auto">
            <!-- Card Component -->
            @foreach ( $ofertas as $oferta )
            <div class="flex w-full px-4 py-6 transition-all duration-150 md:w-1/2 lg:w-1/3">
                <div
                    class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                    <div class="flex flex-row justify-between p-5">
                        <h3 class="p-2 text-lg text-center text-white uppercase bg-purple-500 rounded font-subtitle">
                            {{ $oferta->categoria_oferta }}</h3>
                        <h3 class="p-2 text-lg text-center text-white uppercase bg-green-500 rounded font-subtitle">
                            Ahorro:
                            {!! number_format((float)(100*$oferta->offer_prize/$oferta->invoice_cost_price), 2) !!}
                            %
                        </h3>
                    </div>
                    <div class="md:flex-shrink-0">
                        <img src="{{asset('storage/images/products/'.$oferta->product->product_image)}}"
                            alt="{{ $oferta->product->name}}"
                            class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                    </div>
                    <hr class="border-gray-300" />
                    <div class="flex flex-wrap items-center flex-1 px-4 py-1 mx-auto text-center">
                        <a href="#" class="hover:underline">
                            <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                {{ $oferta->product->name }}
                            </h2>
                        </a>
                    </div>
                    <hr class="border-gray-300" />
                    <p
                        class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                        Marca: {{ $oferta->product->brand }}
                    </p>
                    <hr class="border-gray-300" />
                    <section class="px-4 py-2 mt-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center flex-1">
                                <div class="flex flex-col mx-2">
                                    <p href="" class="text-xl font-semibold text-gray-700 hover:underline">
                                        Se vende en: {{ $oferta->provincia_recogida }}
                                    </p>
                                    <span class="mx-1 text-2xl font-bold text-gray-600">{{ $oferta->offer_prize }}
                                        €</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @endforeach


        </section>

    </div>

</div>
</div>
