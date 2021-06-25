<div>

    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex items-center justify-center mt-4 mb-2 bg-gray-200">
            <div class="grid w-11/12 bg-white rounded-lg shadow-xl md:w-1/12 lg:w-10/12">
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            PRODUCTO:
                        </label>
                        <div wire:model='name' id='name'
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            {{$oferta->product->name}}
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Descripción Corta:
                        </label>
                        <div wire:model='short_description' id='short_description'
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            {{$oferta->product->short_description}}
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Descripción:
                    </label>
                    <div wire:model='description' name="description" id='description'
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        {{ $oferta->product->description}}
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Código de Producto:
                        </label>
                        <div wire:model='product_code' id='product_code'
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            {{ $oferta->product->product_code}}
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            CATEGORÍA:
                        </label>
                        <div wire:model='product_code' id='product_code'
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            {{ $oferta->product->subcategorie->name }}
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 mx-7">
                    <h2 class="text-3xl">DATOS DE LA OFERTA:</h2>
                </div>
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            LOCALIDAD RECOGIDA:
                        </label>
                        <input wire:model='localidad_recogida' id='localidad_recogida' name="localidad_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->localidad_recogida }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            PROVINCIA RECOGIDA:
                        </label>
                        <input wire:model='provincia_recogida' id='provincia_recogida' name="provincia_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->provincia_recogida }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            CP:
                        </label>
                        <input wire:model='cp_recogida' id='cp_recogida' name="cp_recogida"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->cp_recogida }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Precio Coste:
                        </label>
                        <input wire:model='invoice_cost_price' id='invoice_cost_price' name="invoice_cost_price"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->invoice_cost_price }} €" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Unidades:
                        </label>
                        <input wire:model='boxes' id='boxes' name="boxes"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="int" placeholder="{{ $oferta->boxes }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Unidades en Oferta:
                        </label>
                        <input wire:model='offer_units' id='offer_units' name="offer_units"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->offer_units }} mm" />
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Proveedor:
                        </label>
                        <input wire:model='provider' id='provider' name="provider"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->provider }}" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Fecha Compra:
                        </label>
                        <input wire:model='buyed_date' id='buyed_date' name="buyed_date"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="date" placeholder="{{ $oferta->buyed_date }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Plazo Preparación Pedido:
                        </label>
                        <input wire:model='plazo_preparacion_pedido' id='plazo_preparacion_pedido'
                            name="plazo_preparacion_pedido"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="date" placeholder="{{ $oferta->plazo_preparacion_pedido }} mm" />
                    </div>

                </div>

                <hr>
                <div class="grid grid-cols-1 gap-5 m-8 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿ACTIVAR OFERTA?:</label>
                        <select wire:model='active' id='active' name="active"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="">--Elige una opción--</option>
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </div>
                </div>

                <hr>

                <label
                    class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                    ACTUALIZAR FOTOS DE LA OFERTA
                </label>
                <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                    <div class='flex items-center justify-center w-5/6'>
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-1'>
                                <div>
                                    <p
                                        class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                        FOTO ACTUAL #1</p>
                                    @if(!$oferta->user_image)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$oferta->user_image)}}"
                                        class="w-20 h-20" />
                                    @endif
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
                                    @if(!$oferta->user_image_2)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$oferta->user_image_2)}}"
                                        class="w-20 h-20" />
                                    @endif
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
                                    @if(!$oferta->user_image_3)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$oferta->user_image_3)}}"
                                        class="w-20 h-20" />
                                    @endif
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$oferta->user_image)
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
                        <div wire:loading>
                            Procesando...
                        </div>

                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #1 de la Oferta:
                                <img src="{{ $user_image->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
                            </div>
                        </div>

                        @endif
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$oferta->user_image_2)
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
                            <input type='file' class="hidden" wire:model="user_image_2" name="user_image_2" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #2 del Producto:
                                <img src="{{ $oferta->user_image_2->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class='flex items-center justify-center w-5/6'>
                        @if (!$oferta->user_image_3)
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
                            <input type='file' class="hidden" wire:model="user_image_3" name="user_image_3" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #3 del Producto:
                                <img src="{{ $oferta->user_image_3->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
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
                        type="submit">ACTUALIZAR</button>
                    <button
                        class='w-auto px-4 py-2 font-medium text-white bg-red-500 rounded-lg shadow-xl hover:bg-red-700'
                        wire:click="delete ({{ $oferta->id }})">BORRAR</button>
                </div>
            </div>
        </div>
    </form>
</div>
