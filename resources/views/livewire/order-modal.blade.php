{{-- <div>
    <h3 class="text-lg font-medium leading-6 text-gray-900">
        PEDIDO: {{ $order->id }}
    </h3>

    @foreach ($orderItems as $item )
    <div class="p-4 bg-white border-b sm:px-6 sm:py-4 border-gray-150">



    </div>
    <div class="px-4 bg-white sm:p-6">
        <div class="space-y-6">
            {{ $content }}
        </div>
    </div>

    <div class="px-4 pb-5 bg-white sm:px-4 sm:flex">
        {{ $buttons }}
    </div>

    @endforeach

</div> --}}

<x-modal>
    <x-slot name="title">
        Pedido numero: {{$order['id']}}
    </x-slot>

    <x-slot name="content">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                          Producto
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                          Marca
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                          Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                          Precio Unidad
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                           Subtotal
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($orderItems as $item)

                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            {{-- <div class="flex-shrink-0 w-10 h-10">
                              <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div> --}}
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{$item->product->name}}
                              </div>
                              <div class="text-sm text-gray-500">
                                {{$item->units}} Unidades
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{-- <div class="text-sm text-gray-900">{{ $item->unit_price }} €</div> --}}
                          <div class="text-sm text-gray-500"> {{ $item->product->brand }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order['status']}}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $item->unit_price }} €</div>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                            <div class="text-xl text-gray-500">{{ $item->subtotal }} €</div>
                        </td>
                      </tr>

                      @endforeach
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
                <div class="flex m-auto text-2xl text-center text-gray-800">TOTAL FACTURA: {{$order['total_factura']}} €</div>
              </div>
            </div>
          </div>
        {{-- @foreach ($orderItems as $item)
            {{$item->id}} {{ $item->product->name}}
        @endforeach --}}

    </x-slot>

    <x-slot name="buttons">
        Buttons go here...
    </x-slot>
</x-modal>
