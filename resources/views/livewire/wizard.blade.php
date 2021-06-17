<div>
    <!-- component -->
    <!-- This is an example component -->
    <div class="">

        <style>
            [x-cloak] {
                display: none;
            }

            [type="checkbox"] {
                box-sizing: border-box;
                padding: 0;
            }

            .form-checkbox,
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-shrink: 0;
                color: currentColor;
                background-color: #fff;
                border-color: #e2e8f0;
                border-width: 1px;
                height: 1.4em;
                width: 1.4em;
            }

            .form-checkbox {
                border-radius: 0.25rem;
            }

            .form-radio {
                border-radius: 50%;
            }

            .form-checkbox:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            .form-radio:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>

        <div x-data="app()" x-cloak>
            <div class="px-4 py-10 mx-auto max-w-5/6">
                <!-- pantalla final-->
                <div x-show.transition="step === 'complete'">
                    <div class="flex flex-row items-center justify-between p-10 bg-white rounded-lg shadow">
                        <div>
                            <svg class="w-20 h-20 mx-auto mb-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" /></svg>
                            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Oferta Subida Correctamente
                            </h2>

                            <div class="mb-8 text-gray-600">
                                Gracias. Te enviaremos un mail cuando hayamos validado tu Oferta.
                            </div>
                            <button @click="step = 1"
                                class="block w-40 px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100">
                                VOLVER A CREAR OTRA OFERTA
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pasos para rellenar el form-->
                <div x-show.transition="step != 'complete'">
                    <!-- Top Steps Navigation -->
                    <div class="left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
                        <div class="max-w-3xl px-4 mx-auto">
                            <div class="flex justify-between">
                                <div class="w-1/2">
                                    <button x-show="step > 1" @click="step--"
                                        class="w-32 px-5 py-2 font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100">Previous</button>
                                </div>

                                <div class="w-1/2 text-right">
                                    <button x-show="step < 3" @click="step++"
                                        class="w-32 px-5 py-2 font-medium text-center text-white bg-blue-500 border border-transparent rounded-lg shadow-sm focus:outline-none hover:bg-blue-600">Next</button>
                                    @if($storedOferta)
                                    <button @click="step = 'complete'" x-show="step === 3"
                                        class="w-32 px-5 py-2 font-medium text-center text-white bg-blue-500 border border-transparent rounded-lg shadow-sm focus:outline-none hover:bg-blue-600">Complete</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Top Steps Navigation -->
                    <!-- Top Navigation -->
                    <div class="py-4 border-b-2">
                        <div class="mb-1 text-xs font-bold leading-tight tracking-wide text-gray-500 uppercase"
                            x-text="`Step: ${step} of 3`"></div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">

                                <div x-show="step === 1">
                                    <div class="text-lg font-bold leading-tight text-gray-700">
                                        Buscar Producto en nuestra Base de Datos
                                    </div>
                                </div>

                                <div x-show="step === 2">
                                    <div class="text-lg font-bold leading-tight text-gray-700">
                                        Crear Producto
                                    </div>
                                </div>

                                <div x-show="step === 3">
                                    <div class="text-lg font-bold leading-tight text-gray-700">
                                        Crear Oferta
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center md:w-64">
                                <div class="w-full mr-2 bg-white rounded-full">
                                    <div class="h-2 text-xs leading-none text-center text-white bg-green-500 rounded-full"
                                        :style="'width: '+ parseInt(step / 3 * 100) +'%'"></div>
                                </div>
                                <div class="w-10 text-xs text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <!-- / Top Navigation -->

                    <!-- Step Content -->
                    <div class="py-6">
                        <!-- Step 1 Buscar Producto -->
                        <div x-show.transition.in="step === 1">
                            <!-- buscador de producto-->
                            <div class="mb-5 text-center">
                                <div class="inline-flex justify-between w-5/6 m-2">
                                    <div class="w-1/3 mx-1">
                                        <label class="w-16 font-bold">Buscar producto:</label>
                                        <input wire:model.debounce.500ms="search" type="search"
                                            class="flex w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="Buscar Producto por EAN13 o Nombre...">
                                    </div>
                                    <div class="w-1/3 mx-1">
                                        <label class="w-16 font-bold"> Seleccionar producto:</label>
                                        <select name="selected" wire:model="selected"
                                            class="w-full p-2 px-4 py-3 leading-tight bg-white border shadow">
                                            <option value=''>Elije un producto de nuestra Base de Datos</option>
                                            @foreach($productslist as $product)
                                            <option value={{ $product->id }}>{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="w-1/3 mx-1 text-center">
                                        {{-- <label class="w-16 font-bold"> Seleccionar Producto</label>
                                        <button wire:click="selectProduct"
                                            class="w-1/2 px-4 py-3 leading-tight text-center text-gray-200 bg-blue-400 border border-gray-200 rounded text-centerflex text-white-700">
                                            Select
                                        </button> --}}
                                        <label class="w-16 font-bold"> Limpiar el Formulario</label>
                                        <button wire:click="clearSearch"
                                            class="w-full px-4 py-3 leading-tight text-center text-gray-200 bg-blue-400 border border-gray-200 rounded w-1/2flex text-white-700">
                                            Clear
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!-- producto Step 1-->
                            <div class="p-10 mb-2 text-center bg-gray-300">

                                @if($selectedProduct != '')
                                <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
                                    <div class="mb-5">
                                        <label for="name"
                                            class="block mb-1 font-bold text-gray-700">Producto:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="EAN13_individual" class="block mb-1 font-bold text-gray-700">EAN13:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->EAN13_individual }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="product_image"
                                            class="block mb-1 font-bold text-gray-700">IMAGENES:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            {{-- <h3>{{ $selected->name }}</h3> --}}
                                            <img class="w-40 h-40"
                                                src="{{asset('storage/images/products/'.$selectedProduct->product_image)}}"
                                                alt="{{ $product->description }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="inline-flex justify-center w-full p-10 m-2 bg-gray-100">
                                    <div class="mb-5">
                                        <label for="description"
                                            class="block mb-1 font-bold text-gray-700">Descripción:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->description }} Kgs</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
                                    <div class="mb-5">
                                        <label for="part_number" class="block mb-1 font-bold text-gray-700">Part
                                            Number:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->part_number }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="brand" class="block mb-1 font-bold text-gray-700">Marca:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->brand }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="EAN13_individual" class="block mb-1 font-bold text-gray-700">EAN13
                                            individual:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->EAN13_individual }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="net_price" class="block mb-1 font-bold text-gray-700">Peso
                                            neto:</label>
                                        <div
                                            class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->net_price }} €</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-100">
                                    <div class="mb-5">
                                        <label for="unidades_embalaje_original" class="block mb-1 font-bold text-gray-700">Unidades
                                            embalaje
                                            original:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->unidades_embalaje_original }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="dimensions"
                                            class="block mb-1 font-bold text-gray-700">Dimensiones:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->dimensions }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="weight" class="block mb-1 font-bold text-gray-700">Peso:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->weight }} Kgs</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="EAN13_box_2" class="block mb-1 font-bold text-gray-700">EAN Caja
                                            1:</label>
                                        <div
                                            class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->EAN13_box_2 }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
                                    <div class="mb-5">
                                        <label for="unidades_embalaje_2" class="block mb-1 font-bold text-gray-700">Unidades
                                            embalaje
                                            2:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->unidades_embalaje_2 }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="dimensions_boxes_2" class="block mb-1 font-bold text-gray-700">Dimensiones
                                            Caja
                                            2:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->dimensions_boxes_2 }} mm</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="weight_2" class="block mb-1 font-bold text-gray-700">Peso Caja
                                            2:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->weight_2 }} Kgs</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="EAN13_box_2" class="block mb-1 font-bold text-gray-700">EAN Caja
                                            2:</label>
                                        <div
                                            class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->EAN13_box_2 }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-100">
                                    <div class="mb-5">
                                        <label for="unidades_embalaje_3" class="block mb-1 font-bold text-gray-700">Unidades
                                            embalaje
                                            3:</label>
                                        <div
                                            class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->unidades_embalaje_3 }}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="dimensions_boxes_3" class="block mb-1 font-bold text-gray-700">Dimensiones
                                            Caja
                                            3:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->dimensions_boxes_3 }} mm</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="weight_3" class="block mb-1 font-bold text-gray-700">Peso Caja
                                            3:</label>
                                        <div
                                            class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->weight_3 }} Kgs</h3>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="EAN13_box_3" class="block mb-1 font-bold text-gray-700">EAN Caja
                                            3:</label>
                                        <div
                                            class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                                            <h3>{{ $selectedProduct->EAN13_box_3 }}</h3>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- / Step 1 Buscar Producto -->
                        <!-- Step 2 Crear producto IfnotExists -->
                        <div x-show.transition.in="step === 2">
                            <div class="p-10 mb-2 text-center bg-gray-300">
                                @if(!$selectedProduct)
                                <div class="w-1/3 mx-1 text-center">
                                    <button wire:click="clearSearch" type="reset"
                                        class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                        Reiniciar el Formulario
                                    </button>
                                </div>
                                @endif
                                <!--Product FORM -->
                                <form wire:submit.prevent="storeProduct" enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="items-center justify-center p-2 mt-4 mb-2 bg-gray-200">
                                        <div
                                            class="grid w-11/12 mb-4 bg-gray-300 rounded-lg shadow-xl md:w-1/12 lg:w-11/12">
                                            <h2 class="p-2 m-auto font-bold text-center bg-white rounded">
                                                LOS DATOS DEL PRODUCTO:
                                            </h2>
                                            <!-- BLOQUE 1 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Producto:
                                                    </label>
                                                    <input wire:model='name' id='name' name="name"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text"
                                                        placeholder="Ej: Caja de Bolígrafos BIC. Color Rojo" />
                                                    @error('name') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Descripción Corta:
                                                    </label>
                                                    <input wire:model='short_description' id='short_description'
                                                        name="short_description"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: El Bic Naranja de toda la vida" />
                                                    @error('short_description') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 2 -->
                                            <div class="grid grid-cols-1 mt-5 mx-7">
                                                <label
                                                    class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                    Descripción:
                                                </label>
                                                <textarea wire:model='description' name="description" id='description'
                                                    cols="2" rows="2"
                                                    placeholder="Ej: El clasico BIC Cristal Original, es el bolígrafo más vendido del mundo.Su punta media de 1mm se desliza por el papel con suavidad para ofrecer una escritura sin manchas. Tiene un cuerpo transparente que permite comprobar en todo momento el nivel de tinta."
                                                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                        </textarea>
                                                @error('description') <span
                                                    class="text-red-600 error">{{ $message }}</span> @enderror
                                            </div>
                                            <!-- BLOQUE 3 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Código de Producto:
                                                    </label>
                                                    <input wire:model='product_code' id='product_code'
                                                        name="product_code"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 8373609" />
                                                    @error('product_code') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror

                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">CATEGORÍA:
                                                    </label>
                                                    <select wire:model='subcategorie_id' id='subcategorie_id'
                                                        name="subcategorie_id"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                        <option value="" selected = 'selected'>---elije una categoría---</option>
                                                        @foreach ($subcategories as $subcategorie )
                                                        <option value="{{ $subcategorie->id }}">{{ $subcategorie->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('subcategorie_id') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 4 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Part Number:
                                                    </label>
                                                    <input wire:model='part_number' id='part_number' name="part_number"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 8373609" />
                                                    @error('part_number') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Marca:
                                                    </label>
                                                    <input wire:model='brand' id='brand' name="brand"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: BIC" />
                                                    @error('brand') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        EAN-13 individual:
                                                    </label>
                                                    <input wire:model='EAN13_individual' id='EAN13_individual'
                                                        name="EAN13_individual"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 0070330129627" />
                                                    @error('EAN13_individual') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Precio Neto:
                                                    </label>
                                                    <input wire:model='net_price' id='net_price' name="net_price"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 5.6845 €" />
                                                    @error('net_price') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 5 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Unidades Embalaje Original:
                                                    </label>
                                                    <input wire:model='unidades_embalaje_original'
                                                        id='unidades_embalaje_original'
                                                        name="unidades_embalaje_original"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="int" placeholder="Ej: 1" />
                                                    @error('unidades_embalaje_original') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Dimensiones (LxAxH):
                                                    </label>
                                                    <input wire:model='dimensions' id='dimensions'
                                                        name="dimensions"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 13x10,3x14,8 mm" />
                                                    @error('dimensions') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Peso:
                                                    </label>
                                                    <input wire:model='weight' id='weight' name="weight"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 0.300 kgs" />
                                                    @error('weight') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        EAN13 Caja 1:
                                                    </label>
                                                    <input wire:model='EAN13_box_1' id='EAN13_box_1' name="EAN13_box_1"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="" />
                                                    @error('EAN13_box_1') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 6 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Unidades Embalaje 2:
                                                    </label>
                                                    <input wire:model='unidades_embalaje_2' id='unidades_embalaje_2'
                                                        name="unidades_embalaje_2"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="int" placeholder="Ej: 100" />
                                                    @error('unidades_embalaje_2') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Dimensiones Caja 2 (LxAxH):
                                                    </label>
                                                    <input wire:model='dimensions_boxes_2' id='dimensions_boxes_2'
                                                        name="dimensions_boxes_2"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 13x10,3x14,8 mm" />
                                                    @error('dimensions_boxes_2') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Peso Caja 2:
                                                    </label>
                                                    <input wire:model='weight_2' id='weight_2' name="weight_2"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 0.300 kgs" />
                                                    @error('weight_2') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        EAN13 Caja 2:
                                                    </label>
                                                    <input wire:model='EAN13_box_2' id='EAN13_box_2' name="EAN13_box_2"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="" />
                                                    @error('EAN13_box_2') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 7 -->
                                            <div class="grid h-auto grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Unidades Embalaje 3:
                                                    </label>
                                                    <input wire:model='unidades_embalaje_3' id='unidades_embalaje_3'
                                                        name="unidades_embalaje_3"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="int" placeholder="Ej: 30" />
                                                    @error('unidades_embalaje_3') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Dimensiones Caja 3 (LxAxH):
                                                    </label>
                                                    <input wire:model='dimensions_boxes_3' id='dimensions_boxes_3'
                                                        name="dimensions_boxes_3"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 165x80x65 mm" />
                                                    @error('dimensions_boxes_3') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Peso Caja 3:
                                                    </label>
                                                    <input wire:model='weight_3' id='weight_3' name="weight_3"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 9.000 kgs" />
                                                    @error('weight_3') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        EAN13 Caja 3:
                                                    </label>
                                                    <input wire:model='EAN13_box_3' id='EAN13_box_3' name="EAN13_box_3"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="" />
                                                    @error('EAN13_box_3') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!--FOTOS-->
                                            <div class="grid grid-cols-1 gap-5 mt-5 mb-10 md:grid-cols-3 md:gap-8 mx-7">
                                                <!--FOTO 1 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$selectedProduct)
                                                        <label
                                                            class='flex flex-col justify-center w-full border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            @if(!$product_image)
                                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="product_image" name="product_image" />
                                                            @error('product_image') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror

                                                            @else
                                                            <div class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #1 del Producto:
                                                                </p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img src="{{ $product_image->temporaryUrl() }}"
                                                                    class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhoto1" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 1
                                                            </button>
                                                            @endif
                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if( $selectedProduct->product_image)
                                                            <div
                                                                class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #1 del Producto:</p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img
                                                                    src="{{asset('storage/images/products/'.$selectedProduct->product_image)}}" />
                                                            </div>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--FOTO 2 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$selectedProduct)
                                                        <label
                                                            class='flex flex-col justify-center w-full border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            @if(!$product_image_2)
                                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="product_image_2" name="product_image_2" />
                                                            @error('product_image_2') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror

                                                            @else
                                                            <div class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #2 del Producto:
                                                                </p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img src="{{ $product_image_2->temporaryUrl() }}"
                                                                    class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhoto2" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 2
                                                            </button>
                                                            @endif
                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if( $selectedProduct->product_image_2)
                                                            <div
                                                                class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #1 del Producto:</p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img
                                                                    src="{{asset('storage/images/products/'.$selectedProduct->product_image_2)}}" />
                                                            </div>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--FOTO 3 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$selectedProduct)
                                                        <label
                                                            class='flex flex-col justify-center w-full border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            @if(!$product_image_3)
                                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="product_image_3" name="product_image_3" />
                                                            @error('product_image_3') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror

                                                            @else
                                                            <div class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #3 del Producto:
                                                                </p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img src="{{ $product_image_3->temporaryUrl() }}"
                                                                    class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhoto3" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 1
                                                            </button>
                                                            @endif
                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if( $selectedProduct->product_image_3)
                                                            <div
                                                                class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #3 del Producto:</p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img
                                                                    src="{{asset('storage/images/products/'.$selectedProduct->product_image_3)}}" />
                                                            </div>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="max-w-3xl px-4 mx-auto">
                                            <div class="flex justify-between">
                                                @if(!$storedProduct)
                                                @if(!$selected)
                                                <div class="w-1/2">
                                                    <button wire:click="clearSearch" type="reset"
                                                        class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                        Limpiar el Formulario
                                                    </button>
                                                </div>
                                                <div class="w-1/2 text-right">
                                                    <button
                                                        class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-blue-500 rounded-lg shadow-xl hover:bg-gray-700'
                                                        wire:click="storeProduct">
                                                        GUARDAR EL PRODUCTO
                                                    </button>
                                                </div>
                                                @else
                                                <div class="w-full text-center">
                                                    <p class="p-4 text-xl text-white uppercase bg-green-600 rounded">
                                                        PRODUCTO YA CREADO, YA PUEDES RELLENAR LA OFERTA en el siguiente
                                                        paso
                                                    </p>
                                                </div>
                                                @endif
                                                @else
                                                <div class="w-full">
                                                    <p class="p-4 text-xl text-white uppercase bg-green-300 rounded">
                                                        PRODUCTO GUARDADO, YA PUEDES RELLENAR LA OFERTA en el siguiente
                                                        paso</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ Step 2 Crear producto IfnotExists -->
                        <!-- Step 3 Crear Oferta y Validar -->
                        <div x-show.transition.in="step === 3">
                            <div class="p-10 mb-2 text-center bg-gray-300">
                                @if(!$storedOferta)
                                <div class="w-1/3 mx-1 text-center">
                                    <button wire:click="clearOfferForm" type="reset"
                                        class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                        Limpiar el Formulario
                                    </button>
                                </div>

                                <!--OFFER FORM -->
                                <form wire:submit.prevent="storeOffer" enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="items-center justify-center p-2 mt-4 mb-2 bg-gray-200">
                                        <div
                                            class="grid w-11/12 mb-4 bg-gray-300 rounded-lg shadow-xl md:w-1/12 lg:w-11/12">
                                            <h2 class="p-2 m-auto font-bold text-center bg-white rounded">
                                                LOS DATOS DE LA OFERTA:
                                            </h2>
                                            <!-- BLOQUE 1 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Localidad de Recogida:
                                                    </label>
                                                    <input wire:model='localidad_recogida' id='localidad_recogida'
                                                        name="localidad_recogida"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: Fuenlabrada" />
                                                    @error('localidad_recogida') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Provincia de Recogida:
                                                    </label>
                                                    <input wire:model='provincia_recogida' id='provincia_recogida'
                                                        name="provincia_recogida"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: Madrid" />
                                                    @error('provincia_recogida') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Código Postal Recogida:
                                                    </label>
                                                    <input wire:model='cp_recogida' id='cp_recogida' name="cp_recogida"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="EJ: 28024" />
                                                    @error('cp_recogida') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Categoría Oferta: select con 4 opciones
                                                    </label>
                                                    <select wire:model='categoria_oferta' id='categoria_oferta'
                                                        name="categoria_oferta"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                        <option value="" selected>---elije una categoría de venta---</option>
                                                        <option value="Venta Unitaria">VENTA UNITARIA</option>
                                                        <option value="Venta Por Lotes">VENTA POR LOTES</option>
                                                        <option value="Liquidación Lote">LIQUIDACIÓN LOTE</option>
                                                        <option value="Liquidación Total">LIQUIDACIÓN TOTAL</option>
                                                    </select>
                                                    @error('categoria_oferta') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 2 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Unidades en Oferta:
                                                    </label>
                                                    <input wire:model='offer_units' id='offer_units' name="offer_units"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="number" placeholder="" />
                                                    @error('offer_units') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Número de cajas:
                                                    </label>
                                                    <input wire:model='boxes' id='boxes' name="boxes"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="number" placeholder="" />
                                                    @error('boxes') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Dimensiones Embalaje:
                                                    </label>
                                                    <input wire:model='boxes_dimensions' id='boxes_dimensions'
                                                        name="boxes_dimensions"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="EJ: 65x20x30" />
                                                    @error('boxes_dimensions') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        ¿Embalaje Original?
                                                    </label>
                                                    <div class="flex">
                                                        <label
                                                            class="flex items-center justify-start py-3 pl-4 pr-6 mr-4 bg-white rounded-lg shadow-sm text-truncate">
                                                            <div class="mr-3 text-teal-600">
                                                                <input type="radio" x-model="gender" value="Y"
                                                                    class="form-radio focus:outline-none focus:shadow-outline" />
                                                            </div>
                                                            <div class="text-gray-700 select-none">SI</div>
                                                        </label>

                                                        <label
                                                            class="flex items-center justify-start py-3 pl-4 pr-6 bg-white rounded-lg shadow-sm text-truncate">
                                                            <div class="mr-3 text-teal-600">
                                                                <input type="radio" x-model="gender" value="N"
                                                                    class="form-radio focus:outline-none focus:shadow-outline" />
                                                            </div>
                                                            <div class="text-gray-700 select-none">NO</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- BLOQUE 3 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Proveedor:
                                                    </label>
                                                    <input wire:model='provider' id='provider' name="provider"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: No se" />
                                                    @error('provider') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        PORTES:
                                                    </label>
                                                    <select wire:model='porte_id' id='porte_id' name="porte_id"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                        <option value="" selected>---elije un tipo de porte---</option>
                                                        <option value="1">PORTES PAGADOS</option>
                                                        <option value="2s">PORTES DEBIDOS</option>
                                                        <option value="3">PORTES COMPARTIDOS</option>
                                                    </select>
                                                    @error('porte_id') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Precio Compra:
                                                    </label>
                                                    <input wire:model='invoice_cost_price' id='invoice_cost_price'
                                                        name="invoice_cost_price"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="EJ: 6.25" />
                                                    @error('invoice_cost_price') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Fecha Compra:
                                                    </label>
                                                    <input wire:model='buyed_date' id='buyed_date' name="buyed_date"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="date" />
                                                    @error('buyed_date') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <!-- BLOQUE 4 -->
                                            <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Plazo Preparación Pedido:
                                                    </label>
                                                    <input wire:model='plazo_preparacion_pedido'
                                                        id='plazo_preparacion_pedido' name="plazo_preparacion_pedido"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="date" />
                                                    @error('plazo_preparacion_pedido') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="grid grid-cols-1">

                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        Porcentaje Ahorro:
                                                    </label>
                                                    @if($ahorro)
                                                    <div wire:model='ahorro' id='ahorro'
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                        {{ $ahorro }} %
                                                    </div>
                                                    @endif
                                                    @error('') <span class="text-red-600 error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="grid grid-cols-1">
                                                    <label
                                                        class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                                        PRECIO OFERTA:
                                                    </label>
                                                    <input wire:model='offer_prize' id='offer_prize' name="offer_prize"
                                                        class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                        type="text" placeholder="Ej: 5.6845 €" />
                                                    @error('offer_prize') <span
                                                        class="text-red-600 error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!--FOTOS-->
                                            <h2 class="p-2 m-auto font-bold text-center bg-white rounded">
                                                FOTOS DEL LOTE:
                                            </h2>
                                            <div class="grid grid-cols-1 gap-5 mt-5 mb-10 md:grid-cols-3 md:gap-8 mx-7">
                                                <!--FOTO 1 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$user_image)
                                                        <label
                                                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="user_image"
                                                                name="user_image" />
                                                            @error('user_image') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror
                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if($user_image->temporaryUrl())
                                                            <div
                                                                class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">

                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #1 del Lote:</p>
                                                                {{-- <input type="image" wire:model="temp_url_1" name="temp_url_1"> --}}
                                                                <img src="{{ $user_image->temporaryUrl() }}" class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhotoUser1" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 1
                                                            </button>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--FOTO 2 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$user_image_2)
                                                        <label
                                                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            <div class='flex items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="user_image_2"
                                                                name="user_image_2" />
                                                            @error('user_image_2') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror

                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if($user_image_2->temporaryUrl())
                                                            <div
                                                                class="class='flex flex-col items-center justify-center w-60 h-60 pt-7'">
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase'>
                                                                    Foto #2 del Lote:</p>
                                                                <img src="{{ $user_image_2->temporaryUrl() }}" class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhotoUser2" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 2
                                                            </button>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--FOTO 3 -->
                                                <div class="grid grid-cols-1">
                                                    <div class='flex items-center justify-center w-5/6'>
                                                        @if (!$user_image_3)
                                                        <label
                                                            class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                                                            <div class='flex items-center justify-center pt-7'>
                                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                                <p
                                                                    class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                                                    Select a photo
                                                                </p>
                                                            </div>
                                                            <input type='file' class="hidden" wire:model="user_image_3"
                                                                name="user_image_3" />
                                                            @error('user_image_3') <span
                                                                class="text-red-600 error">{{ $message }}</span>
                                                            @enderror
                                                        </label>
                                                        @else
                                                        <div class='flex w-full h-56 hover:border-purple-300 group'>
                                                            @if($user_image_3->temporaryUrl())
                                                            <div
                                                                class="class='flex items-center justify-center w-60 h-60 pt-7'">
                                                                <p
                                                                    class='pt-1 text-base tracking-wider text-gray-400 lowercase'>
                                                                    Foto #3 del Lote:</p>
                                                                <img src="{{ $user_image_3->temporaryUrl() }}" class="">
                                                            </div>
                                                            <div wire:loading>
                                                                Procesando...
                                                            </div>
                                                            <button wire:click="clearPhotoUser3" type="reset"
                                                                class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                                Eliminar Foto 3
                                                            </button>
                                                            @endif
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="max-w-3xl px-4 mx-auto">
                                            <div class="flex justify-between">
                                                @if(!$storedOferta)
                                                <div class="w-1/2">
                                                    <button wire:click="clearOfferForm" type="reset"
                                                        class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                                                        Limpiar el Formulario
                                                    </button>
                                                </div>
                                                <div class="w-1/2 text-right">
                                                    <button
                                                        class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-blue-500 rounded-lg shadow-xl hover:bg-gray-700'
                                                        wire:click="storeOffer">
                                                        GUARDAR LA OFERTA
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @else
                                <div class="flex justify-between">
                                    <div class="max-w-3xl px-4 mx-auto">
                                        <div class="flex justify-between">
                                            Oferta guardada
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- / Step 3 Crear Oferta y Validar -->
                        <!-- Step 3 Crear Oferta y Validar -->
                        {{-- <div x-show.transition.in="step === 3">
                            <div class="mb-5">
                                <label for="email" class="block mb-1 font-bold text-gray-700">Gender</label>

                                <div class="flex">
                                    <label
                                        class="flex items-center justify-start py-3 pl-4 pr-6 mr-4 bg-white rounded-lg shadow-sm text-truncate">
                                        <div class="mr-3 text-teal-600">
                                            <input type="radio" x-model="gender" value="Male"
                                                class="form-radio focus:outline-none focus:shadow-outline" />
                                        </div>
                                        <div class="text-gray-700 select-none">Male</div>
                                    </label>

                                    <label
                                        class="flex items-center justify-start py-3 pl-4 pr-6 bg-white rounded-lg shadow-sm text-truncate">
                                        <div class="mr-3 text-teal-600">
                                            <input type="radio" x-model="gender" value="Female"
                                                class="form-radio focus:outline-none focus:shadow-outline" />
                                        </div>
                                        <div class="text-gray-700 select-none">Female</div>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="profession" class="block mb-1 font-bold text-gray-700">Profession</label>
                                <input type="profession"
                                    class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline"
                                    placeholder="eg. Web Developer">
                            </div>
                        </div> --}}
                        <!-- / Step 3 Crear Oferta y Validar -->
                    </div>
                    <!-- / Step Content -->
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
                <div class="max-w-3xl px-4 mx-auto">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <button x-show="step > 1" @click="step--"
                                class="w-32 px-5 py-2 font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100">Previous</button>
                        </div>

                        <div class="w-1/2 text-right">
                            <button x-show="step < 3" @click="step++"
                                class="w-32 px-5 py-2 font-medium text-center text-white bg-blue-500 border border-transparent rounded-lg shadow-sm focus:outline-none hover:bg-blue-600">Next</button>
                            @if($storedOferta)
                            <button @click="step = 'complete'" x-show="step === 3" wire:click="storeProduct"
                                class="w-32 px-5 py-2 font-medium text-center text-white bg-blue-500 border border-transparent rounded-lg shadow-sm focus:outline-none hover:bg-blue-600">Complete</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>
        <script>
            function app() {
			return {
				step: 1,
				passwordStrengthText: '',
				togglePassword: false,

				image: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAAAAAAAD/4QBCRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAkAAAAMAAAABAAAAAEABAAEAAAABAAAAAAAAAAAAAP/bAEMACwkJBwkJBwkJCQkLCQkJCQkJCwkLCwwLCwsMDRAMEQ4NDgwSGRIlGh0lHRkfHCkpFiU3NTYaKjI+LSkwGTshE//bAEMBBwgICwkLFQsLFSwdGR0sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAdoB2gMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTmZsnmk3N60N1NJTELub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lJQA7c3rSbm9aSigBdzetG4+tJRQAZPrRuPrSUUALub1/lRub1pKSgBdzUbm9aSigBdzetG5vX+VJSUALub1/lUu5qhqXj1oAG6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooASiiigAooooAKSiigAooo+lACUZoooAKKKSgAo/rRSUALUlRVJz60AObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiikoAKSlooASiiigA+lHpRQaACkoooATmilpPegBP/ANdS5HrUdSfL7UAObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKSiigAooooAKKKKAEooooASij60UAFFFHpQAUmaKPxoAKSlpPWgA/wAmk/pS/Sk47dqADpUvPvUXrUn4H8qAHt1NJSt1NJQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFISFBJIAHUk4FAC0VTlv4EyEBc+3C/nVSS9uX6MEHonX8zQBrEqvLEAe5A/nUTXVqvWVfwyf5VjFmY5Ykn3JP86SmBrG/tB3c/RTTf7QtvST8hWXRQBqi/te+8f8AAc09by0b/loB/vAiseigDeV43+66t9CDTq5/p04+lTJdXMfSQkej/MP1oA2qKoR6gpwJUK/7Scj8utXEkjkG5GDD2P8AMUgH0UUUAFFFJQAUUUUAFFFJQAtJRRQAUlFFABR2oo+lAB1pKKP60AFFFFACUHjNH/66KAEpaSj/APVQAc0/I9KZUufpQA5uppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACimsyopZiAo5JNZlxePLlI8rH0J/ib60AWp72KLKph3/wDHR9TWdLNNMcuxPoOij6Co6KYBRRRQAUUUUAFFFFABRRRQAUUUUAFKruhDIxUjuDikooA0IL/os4/4Gv8AUVfBVgCpBB6Ecg1gVLBcSwH5eUP3lPQ/SgDaoqOKaOZdyH/eB6qfepKQBRRRQAlFFFABSUUUAFFFFABRRSf5NABxR6e1FJQAcUUUnP6UALSf5/GjvRz+FAB06d6KT6UGgA96kyf8mo//ANdP59P1oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmu6RqzucKvJNKSACScADJJ7Csi6uDO2BkRqflHr7mgBLi5edu4QH5V/qagoopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACUUUUAPjkkiYOhwR+RHoa14J0nTI4YffX0NYtPileJ1dDyOoPQj0NAG7SUyKVJkDr36juD6U+kAUhoooAKKKKACij/JpKACj/PNFFABScUelFACUdqP8mj+dABn9KMjij60d+tACf5FH5Uf59qOOlACfhUn40zmn4oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKhuJhDEz/xfdQerGgCpfXGT5CHgf6w+/8AdqhQSSSScknJPqTRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiiigCe2nMEnP+rbhx6e9bHoQevT3zXP1p2M+9DE33k5X/AHf/AK1AF2koNFIAoopKAFpKKPSgApPX0pf8mkoAKKTPP1paAE+lFFIT/ntQAelHAoz0oz/hQAd6T155oooAKk2+wqLPt/8AWqTj1P5GgCZuppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArJvpd8uwH5Y+P+BHrWnK4jjkc/wAKkj69qwiSSSepJJ+ppgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSUUUAFFFFABRRSUAFFFFABT4pDFIkg/hPPuO4plFAG8CGAYchgCD7HmlqpYy74dp6xnH4HkVapALSUUUAH+NFFJQAc0f5+tHFJQAUUUepoAP/r0nP/1sUH1ozQAUnOaPwo9OlAAcd6T60tJQAHn+lSZPotR/55qTJ/yKAJm6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKWoPiNE/vtk/RazKt6g2Zgv9xB+Z5qpTAKKKKACiiigAooooAKKKKA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',
				password: '',
				gender: 'Male',

				checkPasswordStrength() {
					var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
					var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

					let value = this.password;

					if (strongRegex.test(value)) {
						this.passwordStrengthText = "Strong password";
					} else if(mediumRegex.test(value)) {
						this.passwordStrengthText = "Could be stronger";
					} else {
						this.passwordStrengthText = "Too weak";
					}
				}
			}
		}
        </script>
    </div>
</div>
