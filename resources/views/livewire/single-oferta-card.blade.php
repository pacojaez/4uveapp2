<div>
    <section class="overflow-hidden text-gray-600 body-font">
        <div class="container px-5 py-2 mx-auto">
            <div class="flex flex-wrap m-2 mx-auto lg:w-4/5">
                <x-jet-nav-link class="m-5 font-bold">
                    Categoría: {{ $category->name }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('categorieproducts', ['id' => $subcategorie->id] ) }}" class="m-5 font-bold">
                    Subcategoría: {{ $subcategorie->name }}
                </x-jet-nav-link>
            </div>
            <div class="flex flex-wrap m-2 mx-auto lg:w-4/5">
                <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font">{{ $product->name }}</h1>
            </div>
            <div class="flex flex-wrap mx-auto lg:w-4/5">
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">

                    <h2 class="text-xl font-semibold tracking-widest text-gray-500 title-font">Marca: {{ $product->brand }}
                    </h2>
                    {{-- <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font">{{ $product->name }}</h1> --}}
                    <div class="flex mb-4">
                        <h3 class="flex-grow px-1 py-2 text-lg text-indigo-500 border-b-2 border-indigo-500">Descripción
                        </h3>
                        {{-- <a class="flex-grow px-1 py-2 text-lg border-b-2 border-gray-300">Reviews</a>
                        <a class="flex-grow px-1 py-2 text-lg border-b-2 border-gray-300">Details</a> --}}
                    </div>
                    <p class="mb-4 leading-relaxed">{{ $product->description }}</p>
                    <div class="flex py-2 border-t border-gray-200">
                        <span class="text-gray-500">EAN-13</span>
                        <span class="ml-auto text-gray-900">{{ $product->EAN13_individual }}</span>
                    </div>
                    <div class="flex py-2 border-t border-gray-200">
                        <span class="text-gray-500">Código de Producto</span>
                        <span class="ml-auto text-gray-900">{{$product->product_code}}</span>
                    </div>
                    <div class="flex py-2 mb-6 border-t border-b border-gray-200">
                        <span class="text-gray-500">Part Number</span>
                        <span class="ml-auto text-gray-900">{{ $product->part_number }}</span>
                    </div>
                    <div class="flex py-2 mb-6 border-t border-b border-gray-200">
                        <span class="text-gray-500">Precio Coste: </span>
                        <span class="ml-auto text-gray-900">{{ $oferta->invoice_cost_price }}</span>
                    </div>
                    <div class="flex p-2 mb-2 border-t border-gray-200">
                        <span class="text-2xl font-extrabold text-gray-500">Porcentaje de Ahorro</span>
                        @if($oferta->invoice_cost_price)
                        <span class="ml-auto text-2xl font-extrabold text-gray-900">
                            {!! number_format((float)(100- ($oferta->offer_prize*100)/$oferta->invoice_cost_price), 2) !!}
                            %</span>
                        @endif
                    </div>
                    <div class="flex p-2 mb-2 border-t border-gray-200">
                        <span class="text-4xl font-extrabold text-gray-500">Oferta: </span>
                        <span class="ml-auto text-4xl font-extrabold text-gray-900">
                            {{ $oferta->offer_prize}} €</span>
                    </div>
                    <div class="flex">
                        <div class="bottom-0 flex w-full pb-5 mt-5">
                            <input class="mb-2 border-2 rounded" type="number" min="1" wire:model="quantity">
                            <button wire:click="addToCart"
                                class="flex px-6 py-2 ml-auto mr-4 font-bold text-white uppercase bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
                                AÑADIR AL CARRITO
                            </button>
                        </div>
                        {{-- <script>
                            Livewire.on('productAddedToCart', product_id => {
                                alert('A product was added with the id: ' + product_id);
                            })
                        </script> --}}
                        {{-- <button
                            class="flex px-6 py-2 ml-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">AÑADIR
                            AL CARRO</button> --}}
                        {{-- <button class="inline-flex items-center justify-center w-10 h-10 p-0 ml-4 text-gray-500 bg-gray-200 border-0 rounded-full"> --}}
                        {{-- <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                </svg> --}}
                        {{-- </button> --}}
                    </div>
                </div>
                <img alt="{{ $product->name }}" class="object-cover object-center w-full h-64 rounded lg:w-1/2 lg:h-auto"
                    src="{{asset('storage/images/products/'.$product->product_image)}}" />
            </div>
        </div>
    </section>
    <!-- SECCION DE FOTOS DEL PRODUCTO -->
    <section class="overflow-hidden text-gray-600 body-font">
        <h2 class="flex justify-center w-full text-2xl font-bold body-font">FOTOS DEL PRODUCTO</h2>
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap justify-between mx-auto lg:w-4/5">
                <img alt="{{ $product->name }}" class="object-cover object-center w-1/3 h-64 m-2 rounded lg:w-1/3 lg:h-80"
                    src="{{asset('storage/images/products/'.$product->product_image_2)}}">
                <img alt="{{ $product->name }}" class="object-cover object-center w-1/3 h-64 m-2 rounded lg:w-1/3 lg:h-80"
                    src="{{asset('storage/images/products/'.$product->product_image_2)}}">
            </div>
        </div>
    </section>
    <section class="overflow-hidden text-gray-600 body-font">
        <h2 class="flex justify-center text-2xl font-bold body-font">FOTOS DEL LOTE</h2>
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap justify-between mx-auto lg:w-full">
                @if($oferta->user_image)
                <img alt="{{ $product->name }}" class="object-cover object-center w-1/4 h-64 m-2 rounded lg:w-1/4 lg:h-auto"
                    src="{{asset('storage/images/products/'.$oferta->user_image)}}" />
                @endif
                @if($oferta->user_image_2)
                <img alt="{{ $product->name }}" class="object-cover object-center w-1/4 h-64 m-2 rounded lg:w-1/4 lg:h-auto"
                src="{{asset('storage/images/products/'.$oferta->user_image_2)}}" />
                @endif
                @if($oferta->user_image_3)
                <img alt="{{ $product->name }}" class="object-cover object-center w-1/4 h-64 m-2 rounded lg:w-1/4 lg:h-auto"
                    src="{{asset('storage/images/products/'.$oferta->user_image_3)}}" />
                @endif
            </div>
        </div>
    </section>
    <!-- SECCION DE DATOS TECNICOS DEL PRODUCTO -->
    <div class="flex flex-wrap m-2 mx-auto lg:w-4/5">
        <h1 class="mb-4 text-3xl font-bold text-gray-900 title-font">{{ $product->name }}</h1>
    </div>
    <section class="overflow-hidden text-gray-600 body-font">
        <div class="container px-5 py-2 mx-auto">
            <div class="flex flex-wrap mx-auto lg:w-4/5">
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                    <div class="flex mb-4">
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">EAN-13</span>
                        <span class="ml-auto text-gray-900">{{ $product->EAN13_individual }}</span>
                    </div>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">Código de Producto</span>
                        <span class="ml-auto text-gray-900">{{$product->product_code}}</span>
                    </div>
                    <div class="flex p-2 mb-6 border-t border-b border-gray-200">
                        <span class="text-gray-500">Part Number</span>
                        <span class="ml-auto text-gray-900">{{ $product->part_number }}</span>
                    </div>
                    <h3 class="font-bold">EMBALAJE INDIVIDUAL:</h3>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">UNIDADES EMBALAJE INDIVIDUAL</span>
                        <span class="ml-auto text-gray-900">{{ $product->unidades_embalaje_individual }}</span>
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">DIMENSIONES (LxAxH)</span>
                        <span class="ml-auto text-gray-900">{{$product->dimensions_boxes}} mm</span>
                    </div>
                    <div class="flex p-2 mb-6 bg-gray-200 border-t border-b border-gray-200">
                        <span class="text-gray-500">PESO</span>
                        <span class="ml-auto text-gray-900">{{ $product->weight }} Kg</span>
                    </div>
                    {{-- <div class="flex">
                        <span class="text-2xl font-medium text-gray-900 title-font">58.00 €</span>
                    </div> --}}
                </div>
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                    <div class="flex mb-4">
                    </div>
                    {{-- <p class="mb-4 leading-relaxed">{{ $product->description }}</p> --}}
                    <h3 class="font-bold">CAJA 1:</h3>
                    {{-- <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">EAN-13 CAJA 1</span>
                        <span class="ml-auto text-gray-900">{{ $product->EAN13_box_1 }}</span>
                </div> --}}
                <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                    <span class="text-gray-500">Unidades Embalaje 1</span>
                    <span class="ml-auto text-gray-900">{{$product->unidades_embalaje_2}}</span>
                </div>
                <div class="flex p-2 border-t border-gray-200">
                    <span class="text-gray-500">DIMENSIONES CAJA 1 (LxAxH)</span>
                    <span class="ml-auto text-gray-900">{{ $product->dimensions_boxes_2 }} mm</span>
                </div>
                <div class="flex p-2 mb-6 bg-gray-200 border-b border-gray-500">
                    <span class="text-gray-500">Peso Embalaje 1</span>
                    <span class="ml-auto text-gray-900">{{ $product->weight_2 }} Kg</span>
                </div>
                <h3 class="font-bold">CAJA 2:</h3>
                {{-- <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">EAN-13 CAJA 2</span>
                        <span class="ml-auto text-gray-900">{{ $product->EAN13_box_2 }}</span>
            </div> --}}
            <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                <span class="text-gray-500">Unidades Embalaje 2</span>
                <span class="ml-auto text-gray-900">{{$product->unidades_embalaje_3}}</span>
            </div>
            <div class="flex p-2 border-t border-gray-200">
                <span class="text-gray-500">DIMENSIONES CAJA 2 (LxAxH)</span>
                <span class="ml-auto text-gray-900">{{ $product->dimensions_boxes_3 }} mm</span>
            </div>
            <div class="flex p-2 mb-6 bg-gray-200 border-b border-gray-500">
                <span class="text-gray-500">Peso Embalaje 2</span>
                <span class="ml-auto text-gray-900">{{ $product->weight_3 }} Kg</span>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- SECCIÓN ENVIO -->
    <div class="w-full p-2 m-4 overflow-hidden text-center rounded shadow-lg">
        <h2 class="text-lg"><span class="text-4xl font-bold">UBICACIÓN PRODUCTO Y DATOS DE PREPARACION DEL PRODUCTO</span>
        </h2>
    </div>
    <section class="overflow-hidden text-gray-600 body-font">
        <div class="container px-5 py-2 mx-auto">
            <div class="flex flex-wrap mx-auto lg:w-4/5">
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                    <div class="flex mb-4">
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">Plazo de preparación</span>
                        <span class="ml-auto text-gray-900">{{ $oferta->plazo_preparacion_pedido }}</span>
                    </div>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">Localidad de Origen</span>
                        <span class="ml-auto text-gray-900">{{$oferta->localidad_recogida}}</span>
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">Provincia de Origen</span>
                        <span class="ml-auto text-gray-900">{{$oferta->provincia_recogida}}</span>
                    </div>
                    <div class="flex p-2 mb-6 bg-gray-200 border-t border-b border-gray-200">
                        <span class="text-gray-500">CP Origen Producto</span>
                        <span class="ml-auto text-gray-900">{{ $oferta->cp_recogida }}</span>
                    </div>
                    <h3 class="font-bold">DATOS DE LA OFERTA:</h3>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">UNIDADES EN OFERTA</span>
                        <span class="ml-auto text-gray-900">{{ $oferta->offer_units }}</span>
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">NÚMERO DE CAJAS</span>
                        <span class="ml-auto text-gray-900">{{$oferta->boxes}}</span>
                    </div>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">DIMENSIONES DEL EMBALAJE</span>
                        <span class="ml-auto text-gray-900">{{$oferta->whole_box_dimensions}} mm</span>
                    </div>
                    @if ($product->embalaje_original)
                    <div class="flex p-2 mb-6 border-t border-b border-gray-200">
                        <span class="text-gray-500">EMBALAJE ORIGINAL</span>
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                            class="ml-auto text-green-500 justify-self-end">
                            <path
                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                                fill="currentColor">
                            </path>
                        </svg>
                        {{-- <span class="ml-auto text-gray-900">{{ $product->original_box }} </span> --}}
                    </div>
                    @endif

                    {{-- <div class="flex">
                        <span class="text-2xl font-medium text-gray-900 title-font">58.00 €</span>
                    </div> --}}
                </div>
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                    <div class="flex mb-4">
                    </div>
                    {{-- <p class="mb-4 leading-relaxed">{{ $product->description }}</p> --}}
                    {{-- <h3 class="font-bold">CAJA 1:</h3> --}}
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">PROVEEDOR</span>
                        <span class="ml-auto text-gray-900">{{ $oferta->provider }}</span>
                    </div>
                    <div class="flex p-2 bg-gray-200 border-t border-gray-200">
                        <span class="text-gray-500">Precio Compra</span>
                        <span class="ml-auto text-gray-900">{{$oferta->invoice_cost_price}} €</span>
                    </div>
                    <div class="flex p-2 border-t border-gray-200">
                        <span class="text-gray-500">Fecha de Compra</span>
                        <span class="ml-auto text-gray-900">{{ $oferta->buyed_date }}</span>
                    </div>
                    {{-- <div class="flex p-2 mb-6 bg-gray-200 border-b border-gray-500">
                        <span class="text-gray-500">Peso Embalaje 1</span>
                        <span class="ml-auto text-gray-900">{{ $product->weight_2 }} Kg</span>
                </div> --}}
                <h3 class="font-bold">OPCIONES DE LA OFERTA:</h3>
                <div class="flex p-2 border-t border-gray-200">
                    <div class="w-full mb-2 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                        @if ($oferta->embalaje_original)
                        <div class="flex p-2 mb-2 border-t border-b border-gray-200">
                            <span class="text-gray-500">EMBALAJE ORIGINAL</span>
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                                class="ml-auto text-green-500 justify-self-end">
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                                    fill="currentColor">
                                </path>
                            </svg>
                        </div>
                        @endif
                    </div>
                    <div class="w-full mb-2 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                        @if ($oferta->new)
                        <div class="flex p-2 mb-2 border-t border-b border-gray-200">
                            <span class="text-gray-500">PRODUCTO NUEVO</span>
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                                class="ml-auto text-green-500 justify-self-end">
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                                    fill="currentColor">
                                </path>
                            </svg>
                        </div>
                        @endif
                    </div>
                    <div class="w-full mb-2 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                        @if ($product->contraoferta == 'Y')
                        <div class="flex p-2 mb-2 border-t border-b border-gray-200">
                            <span class="text-gray-500">Admite contraoferta</span>
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                                class="ml-auto text-green-500 justify-self-end">
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                                    fill="currentColor">
                                </path>
                            </svg>
                            {{-- <span class="ml-auto text-gray-900">{{ $product->original_box }} </span> --}}
                        </div>
                        @else
                        <div class="flex p-2 mb-2 border-t border-b border-gray-200">
                            <span class="text-gray-500">No admite contraoferta</span>
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                                class="ml-auto text-red-500 justify-self-end">
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                                    fill="currentColor">
                                </path>
                            </svg>

                        </div>

                        @endif
                    </div>
                    {{-- <span class="ml-auto text-gray-900">{{ $product->EAN13_box_2 }}</span> --}}
                </div>
                <div class="flex p-2 mb-4 bg-gray-200 border-t border-gray-200">
                    <span class="text-gray-500">PORTES</span>
                    <span class="ml-auto text-gray-900">{{$porte->name}}</span>
                </div>
                <div class="flex p-2 border-t border-gray-200">
                    <span class="text-2xl font-extrabold text-gray-500">Precio Oferta</span>
                    <span class="ml-auto text-2xl font-extrabold text-gray-900">{{ $oferta->offer_prize }} €</span>
                </div>
                <div class="flex p-2 border-t border-gray-200">
                    @if($product->invoice_cost_price)
                    <span class="text-2xl font-extrabold text-gray-500">Porcentaje de Ahorro</span>
                    <span class="ml-auto text-2xl font-extrabold text-gray-900">{!!
                        number_format((float)(100 - ($oferta->offer_prize*100)/$oferta->invoice_cost_price), 2) !!}
                        %</span>
                    @endif
                    {{-- <span class="ml-auto text-gray-900">{{ ($product->offer_prize*100)/$product->invoice_cost_price }}
                    %</span> --}}
                </div>
                <div class="flex">
                    <div class="bottom-0 flex w-full pb-5 mt-5">
                        <input class="mb-2 border-2 rounded" type="number" min="1" wire:model="quantity">
                        <button wire:click="addToCart"
                            class="flex px-6 py-2 ml-auto mr-4 font-bold text-white uppercase bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
                            AÑADIR AL CARRITO
                        </button>
                    </div>
                </div>
            </div>
            {{-- <div class="flex m-auto justify-items-center">
                <button
                    class="flex px-6 py-2 ml-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">AÑADIR
                    AL CARRO</button>
            </div> --}}
        </div>
        </div>
    </section>
</div>
