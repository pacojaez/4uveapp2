<div>
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex items-center justify-center mt-4 mb-2 bg-gray-200">
            <div class="grid w-11/12 bg-white rounded-lg shadow-xl md:w-1/12 lg:w-10/12">
                <div class="p-3 bg-gray-200">
                    <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                                PRODUCTO:
                            </label>
                            <div {{-- wire:model='name' id='name' --}}
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                {{ $oferta->product->name }}
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                Descripción Corta:
                            </label>
                            <div {{-- wire:model='short_description' id='short_description' --}}
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                {{ $oferta->product->short_description }}
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Descripción:
                        </label>
                        <div {{-- wire:model='description' name="description" id='description' --}}
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            {{ $oferta->product->description }}
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                Código de Producto:
                            </label>
                             <div {{--wire:model='product_code' id='product_code' --}}
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                {{ $oferta->product->product_code}}
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                                CATEGORÍA:
                            </label>
                            <div
                                {{-- wire:model='product_code' id='product_code' --}}
                                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                {{ $oferta->product->subcategorie->name }}
                            </div>
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
                    {{-- <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Precio Coste:
                        </label>
                        <input wire:model='invoice_cost_price' id='invoice_cost_price' name="invoice_cost_price"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->invoice_cost_price }} €" />
                    </div> --}}
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
                            type="text" placeholder="{{ $oferta->offer_units }}" />
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
                            type="date" placeholder="{{ $oferta->plazo_preparacion_pedido }}" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿ADMITE CONTRAOFERTA?:
                        </label>
                        <select wire:model='contraoferta' id='contraoferta' name="contraoferta"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" selected disabled>---elije una opción ---</option>
                            <option value="0" {{ $this->oferta->contraoferta ==0 ? 'selected' : '' }} >NO</option>
                            <option value="1" {{ $this->oferta->contraoferta ==1 ? 'selected' : '' }} >SI</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            Categoría Oferta:
                        </label>
                        <select wire:model='categoria_oferta' id='categoria_oferta'
                            name="categoria_oferta"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" disabled>---elije una categoría---</option>
                            <option value="Venta Unitaria" {{ $this->oferta->categoria_oferta =="Venta Unitaria" ? 'selected' : '' }}>VENTA UNITARIA</option>
                            <option value="Venta Por Lotes" {{ $this->oferta->categoria_oferta =="Venta Por Lotes" ? 'selected' : '' }}>VENTA POR LOTES</option>
                            <option value="Liquidación Lote" {{ $this->oferta->categoria_oferta =="Liquidación Lote" ? 'selected' : '' }}>LIQUIDACIÓN LOTE</option>
                            <option value="Liquidación Total" {{ $this->oferta->categoria_oferta =="Liquidación Total" ? 'selected' : '' }}>LIQUIDACIÓN TOTAL</option>
                        </select>
                        @error('categoria_oferta') <span
                            class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿Embalaje Original?
                        </label>
                        <select wire:model='embalaje_original' id='embalaje_original'
                            name="embalaje_original"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" disabled>---elije una opción---</option>
                            <option value="0" {{ $this->oferta->embalaje_original =="0" ? 'selected' : '' }}>NO</option>
                            <option value="1" {{ $this->oferta->embalaje_original =="1" ? 'selected' : '' }}>SI</option>

                        </select>
                        @error('embalaje_original') <span
                            class="text-red-600 error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿Producto Nuevo?
                        </label>
                        <select wire:model='new' id='new'
                            name="new"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" disabled>---elije una opción---</option>
                            <option value="0" {{ $this->oferta->new =="0" ? 'selected' : '' }}>NO</option>
                            <option value="1" {{ $this->oferta->new =="1" ? 'selected' : '' }}>SI</option>

                        </select>
                        @error('embalaje_original') <span
                            class="text-red-600 error">{{ $message }}</span>
                        @enderror

                    </div>
                    {{-- <div class="grid grid-cols-1">
                        <label
                            class="flex items-center justify-start py-3 pl-4 pr-6 mr-4 bg-white rounded-lg shadow-sm text-truncate">
                        PRODUCTO NUEVO
                        </label>
                            <div class="mr-3 text-teal-600">
                                <input type="radio" wire:model="new" value="1"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="text-gray-700 select-none">SI</div>


                        <label
                            class="flex items-center justify-start py-3 pl-4 pr-6 bg-white rounded-lg shadow-sm text-truncate">
                            <div class="mr-3 text-teal-600">
                                <input type="radio" wire:model="new" value="0"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="text-gray-700 select-none">NO</div>
                        </label>
                    </div> --}}
                </div>

                <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            PORTES:
                        </label>
                        <select wire:model='porte_id' id='porte_id' name="porte_id"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" selected disabled>---elije un tipo de porte---</option>
                            <option value="1" {{ $this->oferta->porte_id =="1" ? 'selected' : '' }}>PORTES PAGADOS</option>
                            <option value="2" {{ $this->oferta->porte_id =="2" ? 'selected' : '' }}>PORTES DEBIDOS</option>
                            <option value="3" {{ $this->oferta->porte_id =="3" ? 'selected' : '' }}>PORTES COMPARTIDOS</option>
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
                            type="text" placeholder="{{ $oferta->invoice_cost_price }}" />
                        @error('invoice_cost_price') <span
                            class="text-red-600 error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            PRECIO OFERTA:
                        </label>
                        <input wire:model='offer_prize' id='offer_prize' name="offer_prize"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="{{ $oferta->offer_prize }}" />
                        @error('offer_prize') <span
                            class="text-red-600 error">{{ $message }}</span> @enderror
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

                </div>

                <hr>
                @if(Auth::user()->is_admin)
                <div class="grid grid-cols-1 gap-5 p-3 m-8 bg-red-100 md:grid-cols-4 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                            ¿ACTIVAR OFERTA?:</label>
                        <select wire:model='active' id='active' name="active"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="" disabled>--Elige una opción--</option>
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </div>
                </div>
                @endif

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
                        <button wire:click="clearPhoto1" type="reset"
                            class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                            Eliminar Foto 1
                        </button>
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
                            <input type='file' class="hidden" wire:model="user_image_2" name="user_image_2" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #2 de la Oferta:
                                <img src="{{ $user_image_2->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
                            </div>
                        </div>
                        <button wire:click="clearPhoto2" type="reset"
                            class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                            Eliminar Foto 2
                        </button>
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
                            <input type='file' class="hidden" wire:model="user_image_3" name="user_image_3" />
                        </label>
                        @else
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #3 de la Oferta:
                                <img src="{{ $user_image_3->temporaryUrl() }}" class="">
                            </div>
                            <div wire:loading>
                                Procesando...
                            </div>
                        </div>
                        <button wire:click="clearPhoto3" type="reset"
                            class="class='w-auto px-4 py-2 m-auto font-medium text-center text-white bg-red-600 rounded-lg shadow-xl hover:bg-gray-700'">
                            Eliminar Foto 3
                        </button>
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
