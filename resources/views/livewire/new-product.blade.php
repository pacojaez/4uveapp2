<div>
    {{-- <form method="POST" {{ action('ProductController@update', ['product'=> $product]) }} enctype="multipart/form-data"> --}}
        <form wire:submit.prevent="store" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="flex items-center justify-center mt-4 mb-2 bg-gray-200">
            <div class="grid w-11/12 bg-white rounded-lg shadow-xl md:w-1/12 lg:w-10/12">
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Producto:</label>
                        <input wire:model='name' id='name' name="name"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: Caja de Bolígrafos BIC. Color Rojo" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Descripción
                            Corta:</label>
                        <input
                            wire:model='short_description' id='short_description' name="short_description"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: El Bic Naranja de toda la vida" />
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label
                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Descripción:</label>
                        <textarea wire:model='description' name="description" id='description' cols="2" rows="2"
                                    placeholder="Ej: El clasico BIC Cristal Original, es el bolígrafo más vendido del mundo.Su punta media de 1mm se desliza por el papel con suavidad para ofrecer una escritura sin manchas. Tiene un cuerpo transparente que permite comprobar en todo momento el nivel de tinta."
                                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        </textarea>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Código de
                            Producto:</label>
                        <input
                            wire:model='product_code' id='product_code' name="product_code"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 8373609" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Part Number:
                        </label>
                        <input
                            wire:model='part_number' id='part_number' name="part_number"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 8373609" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Marca:</label>
                        <input
                            wire:model='brand' id='brand' name="brand"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: BIC" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">EAN-13:
                        </label>
                        <input
                            wire:model='EAN13_individual' id='EAN13_individual' name="EAN13_individual"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 0070330129627" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Dimensiones:
                            (Largo x Ancho x Alto) </label>
                        <input
                            wire:model='dimensions_boxes' id='dimensions_boxes' name="dimensions_boxes"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 13x13x13 mm" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Unidades
                            Embalaje
                            Individual: </label>
                        <input
                            wire:model='unidades_embalaje_individual' id='unidades_embalaje_individual' name="unidades_embalaje_individual"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 1" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso:</label>
                        <input
                            wire:model='weight' id='weight' name="weight"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 0.250 Kgs" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Unidades
                            Pack:
                        </label>
                        <input
                            wire:model='pack_units' id='pack_units' name="pack_units"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 3" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES
                            CAJA
                            1: (Largo x Ancho x Alto)</label>
                        <input
                            wire:model='dimensions_boxes_2' id='dimensions_boxes_2' name="dimensions_boxes_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 26 x 30 x 45 mm" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso Caja 1:
                        </label>
                        <input
                            wire:model='weight_2' id='weight_2' name="weight_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder=" Ej: 1.2 Kgs" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES
                            CAJA
                            2: (Largo x Ancho x Alto)</label>
                        <input
                            wire:model='dimensions_boxes_3' id='dimensions_boxes_3' name="dimensions_boxes_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 200 x 200 x 200 mm" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Peso Caja 2:
                        </label>
                        <input
                            wire:model='weight_3' id='weight_3' name="weight_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 9 Kgs" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PLAZO
                            PREPARACION
                            PEDIDO: </label>
                        <input
                            wire:model='plazo_preparacion_pedido' id='plazo_preparacion_pedido' name="plazo_preparacion_pedido"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="date" placeholder=" " />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">ACEPTA
                            CONTRAOFERTA: </label>
                        <select
                            wire:model='contraoferta' id='contraoferta' name="contraoferta"
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
                            wire:model='offer_units' id='offer_units' name="offer_units"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 2" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">NÚMERO DE
                            CAJAS:
                        </label>
                        <input
                            wire:model='boxes_quantity' id='boxes_quantity' name="boxes_quantity"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 9.250 Kgs" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">DIMENSIONES
                            TOTALES DEL EMBALAJE:</label>
                        <input
                            wire:model='whole_boxe_dimensions' id='whole_boxe_dimensions' name="whole_box_dimensions"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 100 x 80 x 40 mm" />
                    </div>
                    {{-- <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">NÚMERO DE
                            CAJAS:
                        </label>
                        <input
                            wire:model='boxes_quantity' id='boxes_quantity'
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->boxes_quantity}} Kgs" />
                    </div> --}}
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PROVEEDOR:</label>
                        <input
                            wire:model='provider' id='provider' name="provider"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: Fabricante" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">COSTE COMPRA:
                        </label>
                        <input
                            wire:model='invoice_cost_price' id='invoice_cost_price' name="invoice_cost_price"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 200 €" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Fecha
                            compra:</label>
                        <input
                            wire:model='buyed_date' id='buyed_date' name="buyed_date"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="date" placeholder="" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">OFERTA HASTA:
                        </label>
                        <input
                            wire:model='offer_until' id='offer_until' name="offer_until"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="date" placeholder="" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-3 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">Localidad de
                            Recogida:</label>
                        <input
                            wire:model='localidad_recogida' id='localidad_recogida' name="localidad_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: Terrassa" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">CODIGO
                            POSTAL:
                        </label>
                        <input
                            wire:model='cp_recogida' id='cp_recogida' name="cp_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: 08226" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PROVINCIA:
                        </label>
                        <input
                            wire:model='provincia_recogida' id='provincia_recogida' name="provincia_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Ej: Barcelona" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">PORTES:
                        </label>
                        <select
                            wire:model='porte_id' id='porte_id' name="porte_id"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            @foreach ($portes as $porte )
                            <option value="{{ $porte->id }}">{{ $porte->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">CATEGORÍA:
                        </label>
                        <select
                            wire:model='subcategorie_id' id='subcategorie_id' name="subcategorie_id"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            @foreach ($subcategories as $subcategorie )
                            <option value="{{ $subcategorie->id }}">{{ $subcategorie->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">OFERTA:
                        </label>
                        <select
                            wire:model='offer' id='offer' name="offer"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">producto
                            nuevo:
                        </label>
                        <select
                            wire:model='new' id='new' name="new"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                </div>
                <hr>

                <label
                    class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                    AÑADIR FOTOS DEL PRODUCTO
                </label>
                {{-- <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                    <div class='flex items-center justify-center w-5/6'>
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-1'>
                                <div>
                                    <p
                                        class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                        FOTO ACTUAL #1</p>
                                    <img src="{{asset('storage/images/products/'.$product->product_image)}}"
                                        class="w-20 h-20" />
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-1'>
                                <div>
                                    <p
                                        class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                        FOTO ACTUAL #2</p>
                                    <img src="{{asset('storage/images/products/'.$product->product_image_2)}}"
                                        class="w-20 h-20" />
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-1'>
                                <div>
                                    <p
                                        class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                        FOTO ACTUAL #3</p>
                                    <img src="{{asset('storage/images/products/'.$product->product_image_3)}}"
                                        class="w-20 h-20" />
                                </div>
                            </div>
                        </label>
                    </div>
                </div> --}}
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image" name="product_image" />
                        </label>
                        @else
                        <div wire:loading>
                            Procesando...
                        </div>
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #1 del Producto:
                                <img src="{{ $product_image->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image_2" name="product_image_2" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #2 del Producto:
                                <img src="{{ $product_image_2->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="product_image_3" name="product_image_3"  />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #3 del Producto:
                                <img src="{{ $product_image_3->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
                            </div>
                        </div>
                        @endif
                    </div>
                </div>



                <label
                    class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="user_image" name="user_image" />
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="user_image_2" name="user_image_2"  />
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
                                <p
                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                    Select a photo</p>
                            </div>
                            <input type='file' class="hidden" wire:model="user_image_3" name="user_image_3"  />
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
                        class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700'
                        type="reset">CANCELAR</button>
                    <button
                        class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'
                        type="submit">CREAR NUEVO PRODUCTO</button>
                </div>

            </div>
        </div>

    </form>

    {{-- <form action="{{ route('products.update', $product->id )}}" method="POST" enc-type="multipart-form-data">
    @csrf
    @method('PUT')

    <button class="btn btn-primary" type="submit">Update</button>
    </form> --}}


</div>
