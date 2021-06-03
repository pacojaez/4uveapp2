<div>
    <!-- component -->
    <div class="container">
        {{-- <h1 class="mb-8">
            TUS PEDIDOS
        </h1> --}}

        <table class="w-full text-left">
            <thead class="flex w-full text-white bg-black">
                <tr class="flex w-full mb-4">
                    <th class="w-1/4 p-4"></th>
                    <th class="w-1/4 p-4">NÚMERO DE PEDIDO</th>
                    <th class="w-1/4 p-4">ESTADO</th>
                    <th class="w-1/4 p-4">CANTIDAD</th>
                    <th class="w-1/4 p-4">UNIDADES</th>
                    <th class="w-1/4 p-4">FECHA</th>
                    @if(Auth::user()->is_admin)
                    <th class="w-1/4 p-4">COMPRADOR</th>
                    @endif
                </tr>
            </thead>
            <tbody class="flex flex-col items-center justify-between w-full overflow-y-scroll bg-grey-light"
                style="height: 50vh;">
                @foreach($orders as $order)

                <tr class="flex w-full mb-4">
                    <td class="w-1/4 p-4">
                        <button wire:click="$emit('openModal', 'order-modal', ['order', {{ $order }}])">VER</button></td>
                    <td class="w-1/4 p-4"># {{ $order->id}}</td>
                    <td class="w-1/4 p-4">{{ $order->status}}</td>
                    <td class="w-1/4 p-4">{{ $order->total_factura}} €</td>
                    <td class="w-1/4 p-4">{{ $order->units }} unidades</td>
                    <td class="w-1/4 p-4">{{ $order->created_at->format('d-m-Y') }}</td>

                    @if(Auth::user()->is_admin)
                    <th class="w-1/4 p-4">{{ $order->user->name}}</th>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
