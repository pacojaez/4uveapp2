<div>
    {{-- <form wire:submit.prevent="save">
        @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
    @endif
    <input type="file" wire:model="photo">
    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>
    </form> --}}
    <form wire:submit.prevent="save" method="POST">
        @csrf
        @method('PUT')
    </form>

    <div class="flex items-center justify-center mt-4 mb-2 bg-gray-200">
        <div class="grid w-11/12 bg-white rounded-lg shadow-xl md:w-1/12 lg:w-10/12">
            {{-- <div class="flex justify-center py-4">
                        <div class="flex p-2 bg-purple-200 border-2 border-purple-300 rounded-full md:p-4">
                          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                      </div> --}}

            {{-- <div class="flex justify-center">
                        <div class="flex">
                          <h1 class="text-xl font-bold text-gray-600 md:text-2xl">Tailwind Form</h1>
                        </div>
                      </div> --}}
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Producto:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{$product->name}}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Descripción
                        Corta:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{$product->short_description}}" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Descripción:</label>
                <textarea cols="2" rows="2" placeholder="{{ $product->description}}"
                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Código de
                        Producto:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->product_code}}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Part Number:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->part_number}}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Marca:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->brand}}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">EAN-13: </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->EAN13_individual}}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Dimensiones:
                        (Largo x Ancho x Alto) </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->dimensions_boxes}} mm" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Unidades Embalaje
                        Individual: </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->unidades_embalaje_individual}}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->weight}} Kgs" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Unidades Pack:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->pack_units}}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES CAJA
                        1: (Largo x Ancho x Alto)</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->dimensions_boxes_2}} mm" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso Caja 1:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->weight_2}} Kgs" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES CAJA
                        2: (Largo x Ancho x Alto)</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->dimensions_boxes_3}} mm" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso Caja 2:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->weight_3}} Kgs" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PLAZO PREPARACION
                        PEDIDO: </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="date" placeholder="{{ $product->plazo_preparacion_pedido}} mm" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">ACEPTA
                        CONTRAOFERTA: </label>
                    <select
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="Y">SI</option>
                        <option value="N">NO</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">UNIDADES EN
                        OFERTA:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->offer_units}}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">NÚMERO DE CAJAS:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->boxes_quantity}} Kgs" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES
                        TOTALES DEL EMBALAJE:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->whole_box_dimensions }} mm" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">NÚMERO DE CAJAS:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->boxes_quantity}} Kgs" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label
                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PROVEEDOR:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->provider }}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">COSTE COMPRA:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->invoice_cost_price}} €" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Fecha
                        compra:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="date" placeholder="{{ $product->buyed_date }}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">OFERTA HASTA:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="date" placeholder="{{ $product->offer_until }}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-3 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Localidad de
                        Recogida:</label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->localidad_recogida }}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">CODIGO POSTAL:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->cp }}" />
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PROVINCIA:
                    </label>
                    <input
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ $product->province }}" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PORTES: </label>
                    <select
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        @foreach ($portes as $porte )
                        <option value="{{ $porte->id }}">{{ $porte->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PORTES: </label>
                    <select
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        @foreach ($subcategories as $subcategorie )
                        <option value="{{ $subcategorie->id }}">{{ $subcategorie->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">OFERTA: </label>
                    <select
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                    </select>
                </div>
                <div class="grid grid-cols-1">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">producto nuevo:
                    </label>
                    <select
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                    </select>
                </div>
            </div>
            <hr>

                <label class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                    AÑADIR FOTOS DEL PRODUCTO
                </label>
                <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$product_image)
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #1 del Producto:
                                <img src="{{ $product_image->temporaryUrl() }}" class="">
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$product_image_2)
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image_2" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #2 del Producto:
                                <img src="{{ $product_image_2->temporaryUrl() }}" class="">
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$product_image_3)
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image_3" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #3 del Producto:
                                <img src="{{ $product_image_3->temporaryUrl() }}" class="">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>



                <label class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                AÑADIR FOTOS DEL PAQUETE
            </label>
            <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                <div class='flex items-center justify-center w-5/6'>
                    @if (!$user_image)
                    <label
                        class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                Select a photo</p>
                        </div>
                        <input type='file' class="hidden" wire:model="user_image" />
                    </label>
                    @else
                    <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class="class='flex flex-col items-center justify-center pt-7'">
                            Foto #1 del Embalaje:
                            <img src="{{ $user_image->temporaryUrl() }}" class="">
                        </div>
                    </div>
                    @endif
                </div>
                <div class='flex items-center justify-center w-5/6'>
                    @if (!$user_image_2)
                    <label
                        class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                Select a photo</p>
                        </div>
                        <input type='file' class="hidden" wire:model="user_image_2" />
                    </label>
                    @else
                    <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class="class='flex flex-col items-center justify-center pt-7'">
                            Foto #2 del Embalaje:
                            <img src="{{ $user_image_2->temporaryUrl() }}" class="">
                        </div>
                    </div>
                    @endif
                </div>
                <div class='flex items-center justify-center w-5/6'>
                    @if (!$user_image_3)
                    <label
                        class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                Select a photo</p>
                        </div>
                        <input type='file' class="hidden" wire:model="user_image_3" />
                    </label>
                    @else
                    <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class="class='flex flex-col items-center justify-center pt-7'">
                            Foto #3 del Embalaje:
                            <img src="{{ $user_image_3->temporaryUrl() }}" class="">
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class='flex items-center justify-center gap-4 pt-5 pb-5 md:gap-8'>
                <button
                    class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700'>CANCELAR</button>
                <button
                    class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'>ACTUALIZAR</button>
            </div>

        </div>
    </div>

    {{-- <form action="{{ route('products.update', $product->id )}}" method="POST" enc-type="multipart-form-data">
    @csrf
    @method('PUT')

    <button class="btn btn-primary" type="submit">Update</button>
    </form> --}}


</div>
