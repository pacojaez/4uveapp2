<div>
    <div class="flex flex-col flex-wrap justify-center p-1 m-2 font-semibold bg-yellow-100 md:flex-row">
        <h2 class="m-4 ml-12 text-lg font-semibold leading-tight text-gray-800 md:text-xl">
            {{ __('Busca entre todas nuestras Ofertas el Producto que necesitas')  }}
        </h2>
        <!-- BUSCADOR -->
        <div class="flex flex-col flex-wrap justify-center w-full pb-10 md:flex-row md:flex-no-wrap">
            <div class="w-full m-1 md:w-2/5">
                <input wire:model.debounce.500ms="search" type="search"
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    placeholder="Buscar Oferta por Marca o Descripción...">
            </div>
            <div class="relative w-full m-1 md:w-1/6">
                <select wire:model="orderBy"
                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                    <option value="name">Descripción</option>
                    <option value="EAN13_individual">EAN13</option>
                    <option value="brand">Marca</option>
                    <option value="part_number">Part Number</option>
                </select>
            </div>
            <div class="relative w-full m-1 md:w-1/6">
                <select wire:model="orderAsc"
                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                    <option value="1">Orden Ascendente</option>
                    <option value="0">Orden Descendente</option>
                </select>

            </div>
            <div class="relative w-full m-1 md:w-1/6">
                <select wire:model="perPage"
                    class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

            </div>
        </div>
    </div>
    <div class="flex flex-wrap justify-center p-2 mx-8 font-semibold bg-yellow-200">
        {{ $ofertas->links() }}
    </div>
    <div class="flex flex-col flex-wrap justify-center p-2 m-5 md:flex-row">
        @foreach($ofertas as $oferta)
        <div class="flex flex-col flex-no-wrap w-full p-2 m-2 md:w-1/5 ">

            <a class="transition duration-300 transform bg-white rounded-lg shadow-xl col-span hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                href="{{ route('singleoferta', ['id' => $oferta->id]) }}">

                <div class="flex flex-row flex-wrap justify-end p-2 m-1">
                    <div class="flex flex-row flex-wrap justify-between my-1">
                        @if($oferta->porte->id == 1)
                        <div
                            class="flex justify-center px-3 py-1 m-1 text-xs font-thin text-white bg-green-600 rounded-full">
                            <span class="flex items-center">
                                PORTES PAGADOS
                            </span>
                        </div>
                        @endif
                        @if(!$oferta->embalaje_original == 1)
                        <div class="flex justify-center px-3 py-1 m-1 text-xs text-white bg-blue-400 rounded-full">
                            <span class="flex items-center">
                                Embalaje Original
                            </span>
                        </div>
                        @endif
                        {{-- <div
                            class="flex h-8 p-2 m-1 text-xs font-semibold text-white bg-green-500 rounded-full justify-items-center">
                            <span class="flex items-center"> --}}
                                @if($oferta->invoice_cost_price != 0 && $oferta->offer_prize != 0)
                                <div class="flex flex-col flex-no-wrap justify-center px-3 py-1 m-1 text-xs text-white bg-green-400 rounded-full">
                                    <span class="">
                                        Ahorro:
                                    </span>
                                    <span class="">
                                    {!!
                                    number_format((float)(100-(100*$oferta->offer_prize/$oferta->invoice_cost_price)),
                                    2) !!}
                                    %
                                    </span>
                                </div>
                                {{-- <h3
                                    class="p-2 text-lg text-center text-white uppercase bg-green-500 rounded font-subtitle">
                                    Ahorro:
                                    {!!
                                    number_format((float)(100-(100*$oferta->offer_prize/$oferta->invoice_cost_price)),
                                    2) !!}
                                    %
                                </h3> --}}
                                @endif
                            {{-- </span>
                        </div> --}}
                        {{-- <div class="flex p-2 mb-2 border-t border-gray-200">
                                <span class="text-2xl font-extrabold text-gray-500">Porcentaje de Ahorro</span>
                                <span class="ml-auto text-2xl font-extrabold text-gray-900">{!!
                                    number_format((float)(($product->offer_prize*100)/$product->invoice_cost_price), 2) !!} %</span>
                            </div> --}}
                    </div>
                    <div class="md:flex-shrink-0">
                        @if($oferta->product->product_image)
                        <img class="object-cover w-full h-48 md:w-48"
                            src="{{asset('storage/images/products/'.$oferta->product->product_image)}}"
                            alt="{{ $oferta->product->name}}" />
                        @else
                        <img class="object-cover w-full h-48 md:w-48"
                            src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                            alt="{{ $oferta->product->name}}" />
                        @endif
                        {{-- <img class="w-10 h-10" src="{{asset('storage/images/products/'.$product->product_image)}}"
                        alt="{{ $product->name}}" /> --}}
                    </div>
                    <div class="flex-1 w-full ml-2">
                        <div>
                            <div class="mt-1 text-base font-bold leading-8">Precio Mercado: <span
                                    class="line-through ">{{$oferta->invoice_cost_price}} €</span></div>
                            <div class="mt-1 text-xl font-bold leading-8">Oferta:{{$oferta->offer_prize}} €</div>
                            <div class="mt-1 text-base text-gray-600">{{$oferta->product->name}}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="flex flex-wrap justify-center p-2 mx-8 my-2 font-semibold bg-yellow-200">
        {{ $ofertas->links() }}
    </div>
</div>
