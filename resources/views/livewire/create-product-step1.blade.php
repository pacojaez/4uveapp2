<!-- Step Content -->
<div class="py-6">
    <!-- Step 1 Buscar Producto -->
    <div x-show.transition.in="step === 1">
        <!-- buscador de producto-->
        <div class="mb-5 text-center">

            <div class="inline-flex justify-between w-5/6 m-2">

                <div class="w-1/3 mx-1">
                    <label class="w-16 font-bold">Buscar producto:</label>
                    {{-- <label>
                        NOMBRE o EAN13
                    </label> --}}
                    <input wire:model.debounce.500ms="search" type="search"
                        class="flex w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        placeholder="Buscar Producto por EAN13 o Nombre...">
                </div>
                <div class="w-1/3 mx-1">
                    <label class="w-16 font-bold"> Seleccionar producto:</label>
                    <select name="selectedProduct" wire:model="selectedProduct"
                        class="w-full p-2 px-4 py-3 leading-tight bg-white border shadow">
                        <option value=''>Elije un producto de nuestra Base de Datos</option>
                        @foreach($productslist as $product)
                        <option value={{ $product->id }}>{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/3 mx-1 text-center">
                    <label class="w-16 font-bold"> Limpiar el Formulario:</label>
                    <button wire:click="clearSearch"
                        class="flex w-full px-4 py-3 leading-tight text-center text-gray-200 bg-blue-400 border border-gray-200 rounded text-white-700">
                        Clear
                    </button>
                </div>

            </div>
            {{-- <div class="relative w-32 h-32 mx-auto mb-2 bg-gray-100 border rounded-full shadow-inset"> --}}
            {{-- <img id="image" class="object-cover w-full h-32 rounded-full" :src="image" /> --}}
            {{-- </div> --}}
            {{-- <div class="w-48 mx-auto mt-1 text-xs text-center text-gray-500">Click to add profile picture</div> --}}
        </div>
        <!-- producto-->
        <div class="p-10 mb-2 text-center bg-gray-300">

            @if($selected != '')
            <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
                <div class="mb-5">
                    <label for="firstname"
                        class="block mb-1 font-bold text-gray-700">Producto:</label>
                    <div
                        class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                        <h3>{{ $selected->name }}</h3>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="firstname" class="block mb-1 font-bold text-gray-700">EAN13:</label>
                    <div
                        class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                        <h3>{{ $selected->EAN13_individual }}</h3>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="firstname"
                        class="block mb-1 font-bold text-gray-700">IMAGENES:</label>
                    <div
                        class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                        {{-- <h3>{{ $selected->name }}</h3> --}}
                        <img class="w-40 h-40"
                            src="{{asset('storage/images/products/'.$selected->product_image)}}"
                            alt="{{ $product->name }}">
                    </div>
                </div>
                {{-- <div class="mb-5">
                    <label for="firstname" class="block mb-1 font-bold text-gray-700">MARCA:</label>
                    <div
                        class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                        <h3>{{ $selected->brand }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Peso:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->weight }} Kgs</h3>
            </div>
        </div> --}}
    </div>
    <div class="inline-flex justify-center w-full p-10 m-2 bg-gray-100">
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Descripción:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->description }} Kgs</h3>
            </div>
        </div>
    </div>
    <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Part Number:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->part_number }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Marca:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->brand }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">EAN13
                individual:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->EAN13_individual }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Peso neto:</label>
            <div
                class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->net_price }} €</h3>
            </div>
        </div>
    </div>
    <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-100">
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Unidades embalaje
                original:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->unidades_embalaje_original }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Dimensiones:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->dimensions }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Peso:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->weight }} Kgs</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">EAN Caja 1:</label>
            <div
                class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->EAN13_box_2 }}</h3>
            </div>
        </div>
    </div>
    <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-200">
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Unidades embalaje
                2:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->unidades_embalaje_2 }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Dimensiones Caja
                2:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->dimensions_boxes_2 }} mm</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Peso Caja 2:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->weight_2 }} Kgs</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">EAN Caja 2:</label>
            <div
                class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->EAN13_box_3 }}</h3>
            </div>
        </div>
    </div>
    <div class="inline-flex justify-between w-full p-10 m-2 bg-gray-100">
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Unidades embalaje
                3:</label>
            <div
                class="w-full px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->unidades_embalaje_3 }}</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Dimensiones Caja
                3:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->dimensions_boxes_3 }} mm</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">Peso Caja 3:</label>
            <div
                class="w-1/3 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->weight_3 }} Kgs</h3>
            </div>
        </div>
        <div class="mb-5">
            <label for="firstname" class="block mb-1 font-bold text-gray-700">EAN Caja 3:</label>
            <div
                class="w-5/6 px-4 py-3 font-medium text-gray-600 rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
                <h3>{{ $selected->EAN13_box_3 }}</h3>
            </div>
        </div>
    </div>
    @endif
</div>
