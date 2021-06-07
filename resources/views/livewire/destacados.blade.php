<div>
    <div class="container p-8 mx-auto">
        <div class="flex w-full">
            <div class="flex flex-col items-center max-w-full mx-auto mt-8">
                <h1 class="w-full text-3xl font-bold text-gray-700">ALGUNAS DE NUESTRAS OFERTAS:</h1>
            </div>
        </div>
        <!-- This is an example component -->
        <section class="flex flex-row flex-wrap mx-auto">
            <!-- Card Component -->
            @foreach ( $products as $product )
            <div class="flex w-full px-4 py-6 transition-all duration-150 md:w-1/2 lg:w-1/3">
                <div
                    class="flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl">
                    <div class="md:flex-shrink-0">
                        {{-- <img class="object-cover w-full h-48 md:w-48" src="{{asset('storage/images/products/'.$product->product_image)}}" alt="{{ $product->name}}" /> --}}

                        <img src="{{asset('storage/images/products/'.$product->product_image)}}" alt="{{ $product->name}}" class="object-fill w-full rounded-lg rounded-b-none md:h-56" />
                    </div>
                    <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                        <span class="text-xs font-medium text-blue-600 uppercase">
                            {{ $product->subcategorie->name }}
                        </span>
                        {{-- <div class="flex flex-row items-center">
                            <div class="flex flex-row items-center mr-2 text-xs font-medium text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                                <span>1.5k</span>
                            </div>

                            <div class="flex flex-row items-center mr-2 text-xs font-medium text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                                <span>25</span>
                            </div>

                            <div class="flex flex-row items-center text-xs font-medium text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                    </path>
                                </svg>
                                <span>7</span>
                            </div>
                        </div> --}}
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
                                {{-- <img class="object-cover h-10 rounded-full"
                                    src="https://thumbs.dreamstime.com/b/default-avatar-photo-placeholder-profile-icon-eps-file-easy-to-edit-default-avatar-photo-placeholder-profile-icon-124557887.jpg"
                                    alt="Avatar" /> --}}
                                <div class="flex flex-col mx-2">
                                    <p href="" class="text-xl font-semibold text-gray-700 hover:underline">
                                        Se vende en: {{ $product->provincia_recogida }}
                                    </p>
                                    <span class="mx-1 text-2xl font-bold text-gray-600">{{ $product->offer_prize }} €</span>
                                </div>
                            </div>
                            {{-- <p class="mt-1 text-xs text-gray-600">9 minutes read</p> --}}
                        </div>
                    </section>
                </div>
            </div>
            @endforeach


        </section>
        {{-- <div class="flex w-full">

        <div class="flex flex-col items-center max-w-sm mx-auto my-8">
            <div style="background-image: url(https://images.unsplash.com/photo-1607081758973-b85919737e26?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHBlbmNpbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64">
            <div class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase">Bolígrafos BIC color Verde</div>
            <div class="flex items-center justify-between px-3 py-2 bg-gray-400">
                <h1 class="font-bold text-gray-800 ">Precio Coste</h1>
                <button class="px-2 py-1 text-xs font-semibold text-white uppercase bg-gray-800 rounded hover:bg-gray-700">MÁS INFORMACIÓN</button>
            </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-sm mx-auto my-8">
            <div style="background-image: url(https://images.unsplash.com/photo-1471970471555-19d4b113e9ed?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fG5vdGVib29rc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64">
                <div class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase">Cuadernos Oxford. Lote de 20 cajas</div>
                <div class="flex items-center justify-between px-3 py-2 bg-gray-400">
                    <h1 class="font-bold text-blue-800 ">Oferta</h1>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase bg-gray-800 rounded hover:bg-gray-700">MÁS INFORMACIÓN</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-sm mx-auto my-8">
            <div style="background-image: url(https://images.unsplash.com/photo-1601049320268-42a9b275068c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWN1YXJlbGF8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64">
            <div class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase">Acuarelas de dibujo</div>
            <div class="flex items-center justify-between px-3 py-2 bg-gray-400">
                <h1 class="font-bold text-green-800 ">Reciclado</h1>
                <button class="px-2 py-1 text-xs font-semibold text-white uppercase bg-gray-800 rounded hover:bg-gray-700">MÁS INFORMACIÓN</button>
            </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-sm mx-auto my-8">
            <div style="background-image: url(https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"
                class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64">
            <div class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase">Nike Revolt</div>
            <div class="flex items-center justify-between px-3 py-2 bg-gray-400">
                <h1 class="font-bold text-red-800 ">Último Lote</h1>
                <button class="px-2 py-1 text-xs font-semibold text-white uppercase bg-gray-800 rounded hover:bg-gray-700">MÁS INFORMACIÓN</button>
            </div>
            </div>
        </div>
    </div> --}}
    </div>
    <!-- component -->
    {{-- <div class="container p-8 m-auto mx-auto text-center">
        <div class="flex flex-row flex-wrap -mx-2">
            <div class="w-full px-2 mb-4 md:w-full">
                <div class="flex -mx-2 sm:flex-row md:flex-col">
                    <div class="items-center justify-center block w-full h-full mx-auto my-8">
                        @foreach ($products as $product)
                        <img class="object-cover w-3/4 h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"
                            src="{{asset('storage/images/products/'.$product->product_image)}}"
                            alt="{{ $product->name}}" />
                        {{-- <div style="background-image: {{asset('storage/images/products/'.$product->product_image)}}"
                        class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div>
                    <div class="w-64 overflow-hidden bg-white rounded-lg shadow-lg -mt-14 md:w-64">
                        <div class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase bg-gray-500">
                            {{ $product->name }}</div>
                        <div class="flex items-center justify-between px-3 py-2 mb-10 bg-gray-400">
                            <h1 class="font-bold text-red-800 ">{{ $product->offer_prize }} €</h1>
                            <a href="{{ route('singleproduct', ['id' => $product->id]) }}">>
                                <button
                                    class="px-2 py-1 text-xs font-semibold text-white uppercase bg-gray-800 rounded hover:bg-gray-700">
                                    MÁS INFORMACIÓN
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div> --}}
</div>
</div>
