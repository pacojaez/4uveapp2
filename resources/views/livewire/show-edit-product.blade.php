<div>
    {{-- <form method="POST" {{ action('ProductController@update', ['product'=> $product]) }}
    enctype="multipart/form-data"> --}}
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex items-center justify-center mt-4 mb-2 bg-gray-200">
            <div class="grid w-11/12 bg-white rounded-lg shadow-xl md:w-1/12 lg:w-10/12">
                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class='has-tooltip'>
                        <div class="grid grid-cols-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                Producto:
                            </label>
                            {{-- <div class='has-tooltip'> --}}
                            <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                                ¿Estás seguro de editar el nombre del Producto?
                            </span>
                            <input wire:model='name' id='name' name="name"
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg has-tooltip focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                type="text" placeholder="{{$product->name}}" />
                            @error('name')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class='has-tooltip'>
                        <div class="grid grid-cols-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                Descripción Corta:
                            </label>
                            <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                                ¿Estás seguro de editar la descripción corta del Producto?
                            </span>
                            <input wire:model='short_description' id='short_description' name="short_description"
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                type="text" placeholder="{{$product->short_description}}" />
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7 has-tooltip">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Descripción:
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar la descripción del Producto?
                    </span>
                    <textarea wire:model='description' name="description" id='description' cols="2" rows="2"
                        placeholder="{{ $product->description}}"
                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        </textarea>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Código de Producto:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            El código del Producto debe tener x digitos
                        </span>
                        <input wire:model='product_code' id='product_code' name="product_code"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->product_code}}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">CATEGORÍA:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            La categoría del Producto es obligatoria, elije una
                        </span>
                        <select wire:model='subcategorie_id' id='subcategorie_id' name="subcategorie_id"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            @foreach ($subcategories as $subcategorie )
                            <option value="{{ $subcategorie->id }}">{{ $subcategorie->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Part Number:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            El PartNumber debe de ser ........
                        </span>
                        <input wire:model='part_number' id='part_number' name="part_number"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->part_number }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Marca:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            La marca del Producto es obligatoria
                        </span>
                        <input wire:model='brand' id='brand' name="brand"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->brand }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            EAN-13 individual:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            El EAN13 Producto debe de ser..............
                        </span>
                        <input wire:model='EAN13_individual' id='EAN13_individual' name="EAN13_individual"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->EAN13_individual }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Precio Neto:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Precio de referencia del mercado
                        </span>
                        <input wire:model='net_price' id='net_price' name="net_price"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->net_price }} €" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Unidades Embalaje Original:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Número de cajas que componen la unidad
                        </span>
                        <input wire:model='unidades_embalaje_individual' id='unidades_embalaje_individual'
                            name="unidades_embalaje_individual"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="int" placeholder="{{ $product->unidades_embalaje_individual }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Dimensiones (LxAxH):
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Dimensiones Largo x Ancho x Alto
                        </span>
                        <input wire:model='dimensions' id='dimensions' name="dimensions"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->dimensions }} mm" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Peso:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Peso de la unidad en gramos
                        </span>
                        <input wire:model='weight' id='weight' name="weight"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->weight }} Kgs" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            EAN13 Caja 1:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            EAN13 de la unidad
                        </span>
                        <input wire:model='EAN13_box_1' id='EAN13_box_1' name="EAN13_box_1"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->EAN13_box_1 }}" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Unidades Embalaje 2:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Número de cajas que componen la unidad
                        </span>
                        <input wire:model='unidades_embalaje_2' id='unidades_embalaje_2' name="unidades_embalaje_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="int" placeholder="{{ $product->unidades_embalaje_2 }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Dimensiones Caja 2 (LxAxH):
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Dimensiones del embalaje 2
                        </span>
                        <input wire:model='dimensions_boxes_2' id='dimensions_boxes_2' name="dimensions_boxes_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->dimensions_boxes_2 }} mm" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Peso Caja 2:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Peso en gramos de la caja 2
                        </span>
                        <input wire:model='weight_2' id='weight_2' name="weight_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->weight_2 }} Kgs" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            EAN13 Caja 2:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            EAN13 de la caja 2
                        </span>
                        <input wire:model='EAN13_box_2' id='EAN13_box_2' name="EAN13_box_2"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->EAN13_box_2 }}" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 my-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Unidades Embalaje 3:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Número de cajas que componen la unidad
                        </span>
                        <input wire:model='unidades_embalaje_3' id='unidades_embalaje_3' name="unidades_embalaje_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="int" placeholder="{{ $product->unidades_embalaje_3 }}" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Dimensiones Caja 3 (LxAxH):
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Dimensiones Largo x Alto x Ancho de la caja3
                        </span>
                        <input wire:model='dimensions_boxes_3' id='dimensions_boxes_3' name="dimensions_boxes_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->dimensions_boxes_3 }} mm" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Peso Caja 3:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Peso en gramos de la Caja 3
                        </span>
                        <input wire:model='weight_3' id='weight_3' name="weight_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->weight_3 }} Kgs" />
                    </div>
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            EAN13 Caja 3:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            EAN13 de la caja 3
                        </span>
                        <input wire:model='EAN_box_3' id='EAN_box_3' name="EAN_box_3"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $product->EAN_box_3 }}" />
                    </div>
                </div>
                <hr>
                <div class="grid grid-cols-1 gap-5 m-8 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1 has-tooltip">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿ACTIVAR PRODUCTO?:
                        </label>
                        <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                            Si activas el producto será visible en el area de Compra de la Aplicación
                        </span>
                        <select wire:model='active' id='active' name="active"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="">--Elige una opción--</option>
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="grid grid-cols-1 has-tooltip">
                    <label class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                        ACTUALIZAR FOTOS DEL PRODUCTO
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        Puedes dejar sin actualizar las fotos del Producto o actualizar las que creas conveniente
                    </span>
                </div>
                <div class="grid justify-between grid-cols-3 mt-5 bg-gray-200 mx-7">
                    <div class='flex items-center justify-center w-5/6'>
                        <label
                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-1'>
                                <div>
                                    <p
                                        class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                        FOTO ACTUAL #1</p>
                                    @if(!$product->product_image)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$product->product_image)}}"
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
                                    @if(!$product->product_image_2)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$product->product_image_2)}}"
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
                                    @if(!$product->product_image_3)
                                    <img src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                        class="w-20 h-20" />
                                    @else
                                    <img src="{{asset('storage/images/products/'.$product->product_image_3)}}"
                                        class="w-20 h-20" />
                                    @endif
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
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
                            <input type='file' class="hidden" wire:model="product_image_3" name="product_image_3" />
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



                <div class='flex items-center justify-center gap-4 pt-5 pb-5 md:gap-8'>
                    <button
                        class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700'
                        type="reset">CANCELAR</button>
                    <button
                        class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'
                        type="submit">ACTUALIZAR</button>
                    <button
                        class='w-auto px-4 py-2 font-medium text-white bg-red-500 rounded-lg shadow-xl hover:bg-red-700'
                        wire:click="delete ({{ $product->id }})">BORRAR</button>
                </div>

            </div>
        </div>

    </form>



</div>
