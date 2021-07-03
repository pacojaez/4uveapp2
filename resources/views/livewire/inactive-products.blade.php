<div>

    @if (session()->has('product_deleted'))
    <div class="px-4 py-2 text-sm font-semibold text-green-900 bg-green-500 border border-green-600 rounded-md">
        {{ session('product_deleted') }}
    </div>
    @endif

    @if( $products->count() == 0 )
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="p-2 m-auto bg-gray-200">
                <h4 class="text-xl font-semibold">Buen trabajo, {{ Auth::user()->name }}, llevas al día la actualización
                    de los Productos</h4>
            </div>
        </div>
    </div>
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
                                    CÓDIGOS
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    DIMENSIONES
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    DATOS USUARIO
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
                                            @if(!$product->product_image)
                                            <img class="w-10 h-10"
                                                src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                                alt="Producto sin imagen" />
                                            @else
                                            <img class="w-10 h-10"
                                                src="{{asset('storage/images/products/'.$product->product_image)}}"
                                                alt="{{ $product->name}}" />
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$product->name }}
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Marca: {{$product->brand }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- </div> --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Codigo: {{ $product->product_code }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        EAN-13: {{ $product->EAN13_individual }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        Part Number: {{ $product->part_number }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Dimensiones: {{ $product->dimensions_boxes }} cms
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Peso: {{ $product->weight }} Kgs
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Unidades Embalaje Individual:
                                        {{ $product->unidades_embalaje_individual }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Unidades Pack: {{ $product->pack_units }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    @if($product->embalaje_original == 'Y')
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Embalaje Original
                                    </span>
                                    @endif
                                    <div class="text-sm text-gray-900">Subido por:</div>
                                    <div class="text-sm text-gray-900">
                                        {{ $product->user->name.' '. $product->user->surname }}
                                    </div>
                                    <div class="text-sm text-gray-900">CONTACTO:</div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->user->email }}
                                    </div>

                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route( 'products.show', $product->id ) }}"
                                        class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</a>

                                    <button
                                        wire:click="$emit('openModal', 'delete-product-modal', {{ json_encode(["product_id" => $product->id ]) }})"
                                        class="px-2 py-1 mx-2 text-red-500 bg-red-200 rounded hover:bg-ref-500 hover:text-white">
                                        Borrar
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2 m-auto bg-gray-200"> {!! $products->links() !!} </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
