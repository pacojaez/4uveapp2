<div>
    {{-- <button wire:click.prefetch="toggleContent" class="px-4 py-2 mb-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Show/Hide Register Form</button> --}}

    {{-- @if ($contentIsVisible)
        <button wire:click.prefetch="updateMode" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Reset Form</button>
        @if($updateMode)
            @include('livewire.update')
        @else
            @include('livewire.create')
        @endif
    @endif --}}
    <div class="flex w-full pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.500ms="search" type="search" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Search Products...">
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="orderBy" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="name" selected="selected">Nombre</option>
                <option value="id">ID</option>
                <option value="product_code">Codigo Producto</option>
                <option value="part_number">Part Number</option>
                <option value="brand">Brand</option>
                <option value="EAN13_individual">EAN-13 individual</option>
                <option value="offer_until">Oferta Hasta</option>
                <option value="invoice_cost_price">Precio Compra</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg> --}}
            </div>
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="orderAsc" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="perPage" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
    </div>
    @if($noProducts)
        <div>No hay Productos con esos términos de búsqueda</div>
    @else
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="p-2 m-auto bg-gray-200"> {!! $products->links() !!} </div>
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Producto
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Recogida
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    PRECIO
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Condiciones
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full"
                                            src="{{asset('storage/images/products/'.$product->product_image)}}"
                                                alt="{{ $product->name}}" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$product->name }}
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Marca: {{$product->brand }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Codigo: {{ $product->product_code }}
                                                EAN-13: {{ $product->EAN13_individual }}
                                                Part Number: {{ $product->part_number }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Dimensiones: {{ $product->dimensions_boxes }}
                                                Peso: {{ $product->weight }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Unidades Embalaje Individual: {{ $product->unidades_embalaje_individual }}
                                                Unidades Pack: {{ $product->pack_units }}
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Contacto Vendedor: {{ $product->user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Recogida: {{$product->localidad_recogida }}</div>
                                    <div class="text-sm text-gray-900">CP recogida: {{$product->cp_recogida }}</div>
                                    <div class="text-sm text-gray-500">Unidades en Oferta: {{$product->offer_units }}</div>
                                    <div class="text-sm text-gray-900">Cantidad de cajas: {{$product->boxes_quantity }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Precio Coste: {{ $product->invoice_cost_price }}</div>
                                    <div class="text-sm text-gray-900">Precio Oferta: {{ $product->offer_price }}</div>
                                    <div class="text-sm text-gray-900">Fecha Compra: {{ $product->buyed_date }}</div>
                                    <div class="text-sm text-gray-900">Oferta hasta: {{ $product->offer_until }}</div>
                                    {{-- <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        {{ $user->tipo_usuario }}
                                    </span> --}}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    @if($product->embalaje_original == 'Y')
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Embalaje Original
                                    </span>
                                    @endif
                                    {{-- <div class="text-sm text-gray-900">Embalaje Original: {{ $product->embalaje_original }}</div> --}}
                                    <div class="text-sm text-gray-900">Portes: {{ $product->porte->tipo }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route( 'products.show', $product->id ) }}" class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</a>
                                    {{-- <button class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</button> --}}

                                    <button wire:click="destroy({{$product->id}})" class="px-2 py-1 text-red-500 bg-red-200 rounded hover:bg-red-500 hover:text-white">Borrar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2 m-auto bg-gray-200"> {!! $products->links() !!} </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
