<div>
    <div class="container p-8 mx-auto">
        <div class="flex w-full">
            <div class="flex flex-col items-center max-w-full mx-auto mt-8">
                <h1 class="w-full text-3xl text-red-600 font-title">ALGUNAS DE NUESTRAS OFERTAS:</h1>
            </div>
        </div>
        <section class="flex flex-row flex-wrap mx-auto">
            <!-- Card Component -->
            @foreach ( $products as $product )
            <div class="flex w-full px-4 py-6 transition-all duration-150 md:w-1/2 lg:w-1/3">
                <div
                    class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                    <div class="md:flex-shrink-0">

                        <img src="{{asset('storage/images/products/'.$product->product_image)}}" alt="{{ $product->name}}" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                    </div>
                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                        <span class="text-xs font-medium text-blue-600 uppercase">
                            {{ $product->subcategorie->name }}
                        </span>

                    </div>
                    <hr class="border-gray-300" />
                    <div class="flex flex-wrap items-center flex-1 px-4 py-1 mx-auto text-center">
                        <a href="#" class="hover:underline">
                            <h2 class="text-2xl font-bold tracking-normal text-gray-800">
                                {{ $product->name }}
                            </h2>
                        </a>
                    </div>
                    <hr class="border-gray-300" />
                    <p
                        class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-gray-700">
                        {{ $product->description }}
                    </p>
                    <hr class="border-gray-300" />
                    <section class="px-4 py-2 mt-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center flex-1">
                                <div class="flex flex-col mx-2">
                                    <p href="" class="text-xl font-semibold text-gray-700 hover:underline">
                                        Se vende en: {{ $product->provincia_recogida }}
                                    </p>
                                    <span class="mx-1 text-2xl font-bold text-gray-600">{{ $product->offer_prize }} €</span>
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
