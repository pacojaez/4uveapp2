<div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    @if($noOfertas)
    <div>No hay Productos con esos términos de búsqueda</div>
    @else
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                {{-- <div class="p-2 m-auto bg-gray-200"> {!! $ofertas->links() !!} </div> --}}
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
                                    OFERTA
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
                            @foreach($ofertas as $oferta)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            @if(!$oferta->user_image)
                                            <img class="w-10 h-10"
                                                src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                                alt="Producto sin imagen" />
                                            @else
                                            <img class="w-10 h-10"
                                                src="{{asset('storage/images/products/'.$oferta->product->product_image)}}"
                                                alt="{{ $oferta->product->name}}" />
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$oferta->product->name }}
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Marca: {{$oferta->product->brand }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Codigo: {{ $oferta->product->product_code }}
                                            </div>
                                            <div class="text-sm text-gray-900">
                                                EAN-13: {{ $oferta->product->EAN13_individual }}
                                            </div>
                                            <div class="text-sm text-gray-900">
                                                Part Number: {{ $oferta->product->part_number }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Localidad: {{ $oferta->localida_recogida }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        Plazo Preparación: : {{ $oferta->plazo_preparacion_pedido }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        Proveedor: {{ $oferta->provider }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Cajas: {{ $oferta->boxes }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Unidades en Oferta: {{ $oferta->offer_units }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        CATEGORIA VENTA:
                                        {{ $oferta->categoria_oferta }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Portes: {{ $oferta->porte->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    @if($oferta->embalaje_original == 'Y')
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Embalaje Original
                                    </span>
                                    @endif

                                    <div class="text-sm text-gray-900">Subido por:</div>
                                    <div class="text-sm text-gray-900">
                                        {{ $oferta->user->name.' '. $oferta->user->surname }}
                                    </div>
                                    <div class="text-sm text-gray-900">CONTACTO:</div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $oferta->user->email }}
                                    </div>


                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route( 'ofertas.show', $oferta->id ) }}"
                                        class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">Editar</a>

                                    <button wire:click="destroy({{$oferta->id}})"
                                        class="px-2 py-1 text-red-500 bg-red-200 rounded hover:bg-red-500 hover:text-white">Borrar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="p-2 m-auto bg-gray-200"> {!! $ofertas->links() !!} </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
