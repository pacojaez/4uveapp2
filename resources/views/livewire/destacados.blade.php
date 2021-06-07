<div>
    <div class="container p-8 mx-auto">
        <div class="flex w-full">
            <div class="flex flex-col items-center max-w-lg mx-auto mt-8">
                <h1 class="text-3xl font-bold text-gary-700">ÚLTIMOS PRODUCTOS AÑADIDOS:</h1>
            </div>
        </div>
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
    <div class="container p-8 m-auto mx-auto text-center">
        <div class="flex flex-row flex-wrap -mx-2">
            <div class="w-full px-2 mb-4 md:w-full">
                <div class="flex -mx-2 sm:flex-row md:flex-col">
                    <div class="items-center justify-center block w-full h-full mx-auto my-8">
                        @foreach ($products as $product)
                        <img  class="object-cover w-3/4 h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" src="{{asset('storage/images/products/'.$product->product_image)}}" alt="{{ $product->name}}" />
                        {{-- <div style="background-image: {{asset('storage/images/products/'.$product->product_image)}}"
                            class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md"></div> --}}
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
        </div>
    </div>
</div>
