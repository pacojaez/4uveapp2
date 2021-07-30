
 <x-modal form-action="update">
    <x-slot name="title">
        EDITAR Pedido numero: {{$order['id']}}
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
                                {{$item->oferta->product->name}}
                              </div>
                              <div class="text-sm text-gray-500">
                                {{ $item->units }} Unidades
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          {{-- <div class="text-sm text-gray-900">{{ $item->unit_price }} €</div> --}}
                          <div class="text-sm text-gray-500"> {{ $item->oferta->product->brand }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           <div class="text-sm text-gray-900">
                              <span class="font-bold">{{ $order['status']}}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $item->oferta->offer_prize }} €</div>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                            <div class="text-xl text-gray-500">{{ $item->subtotal }} €</div>
                        </td>
                      </tr>

                      @endforeach
                      <td class="px-6 py-4 whitespace-nowrap">
                           <div class="text-sm text-gray-900">ACTUAL: <span class="font-bold">{{ $order['status']}}</span></div>
                           <select wire:model='editstatus' id='editstatus' name="editstatus"
                            class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                <option value="">--Elige una opción--</option>
                                <option value="Pendiente de Confirmación">Pendiente de Confirmación</option>
                                <option value="Aceptado">Aceptado</option>
                                <option value="Enviado">Enviado</option>
                                <option value="En reparto">En reparto</option>
                                <option value="Cerrado">Cerrado</option>
                        </select>
                        </td>
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
                <div class="mx-auto my-10 text-2xl text-center text-gray-800">TOTAL FACTURA: {{$order['total_factura']}} €</div>
              </div>
            </div>
          </div>
        {{-- @foreach ($orderItems as $item)
            {{$item->id}} {{ $item->product->name}}
        @endforeach --}}

    </x-slot>

    <x-slot name="buttons">

        <button wire:click="$emit('update')" class="w-full px-3 py-2 m-2 text-center text-red-400 border-2 border-red-600 rounded-lg cursor-pointer hover:bg-red-600 hover:text-red-200">
            <> UPDATE
        </button>

        <button wire:click="$emit('closeModal')" class="w-full px-3 py-2 m-2 text-center text-yellow-400 border-2 border-yellow-600 rounded-lg cursor-pointer hover:bg-yellow-600 hover:text-yellow-200">
            X Close
        </button>
    </x-slot>
</x-modal>
