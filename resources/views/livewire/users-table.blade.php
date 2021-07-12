<div>
    @if (session()->has('user-updated-message'))
    <div class="px-4 py-2 my-2 text-sm font-semibold text-green-900 bg-green-500 border border-green-600 rounded-md">
        {{ session('user-updated-message') }}
    </div>
    @endif
    @if (session()->has('user-deleted-message'))
    <div class="px-4 py-2 my-2 text-sm font-semibold text-red-900 bg-red-500 border border-red-600 rounded-md">
        {{ session('user-deleted-message') }}
    </div>
    @endif
    @if (session()->has('user-created-message'))
    <div class="px-4 py-2 my-2 text-sm font-semibold text-green-900 bg-green-500 border border-green-600 rounded-md">
        {{ session('user-created-message') }}
    </div>
    @endif




    <div class="flex w-full pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.500ms="search" type="search"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Search users...">
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="orderBy"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="name">Nombre</option>
                <option value="id">ID</option>
                <option value="email">Email</option>
                <option value="company">Empresa</option>
                <option value="comercial_name">Nombre Comercial</option>
                <option value="tipo_usuario">Tipo de Usuario</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="orderAsc"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>
        <div class="relative w-1/6 mx-1">
            <select wire:model="perPage"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>
    </div>
    @if($noUsers)
    <div>No hay Usuarios con esos términos de búsqueda</div>
    @else
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="p-2 m-2 bg-gray-200"> {!! $users->links() !!} </div>
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Nombre y Apellidos
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Empresa y Cargo
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Tipo de Usuario
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Dirección
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    Acciones<span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $user->name }} {{ $user->surname }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Mail: {{ $user->email }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Telefono: {{ $user->phone }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">EMPRESA: {{ $user->company }}</div>
                                    <div class="text-sm text-gray-900">Nombre Comercial: {{ $user->comercial_name }}
                                    </div>
                                    <div class="text-sm text-gray-500">CIF: {{ $user->CIF }}</div>
                                    <div class="overflow-hidden font-bold text-gray-900">{{ $user->tipo_usuario }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="overflow-hidden text-xs text-gray-900 w-28">{{ $user->email }}</div>

                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Direccion: {{ $user->adress }}</div>
                                    <div class="text-sm text-gray-900">Localidad: {{ $user->city }}</div>
                                    <div class="text-sm text-gray-500">CP: {{ $user->cp }}</div>
                                    <div class="text-sm text-gray-500">Provincia: {{ $user->province }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route( 'user.edit', $user->id ) }}">
                                        <button
                                            class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">
                                            Editar
                                        </button>
                                    </a>
                                    <button
                                        wire:click="$emit('openModal', 'delete-user-modal', {{ json_encode(["user_id" => $user->id ]) }})"
                                        class="px-2 py-1 mx-2 text-red-500 bg-red-200 rounded hover:bg-ref-500 hover:text-white">
                                        Borrar
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2 m-2 bg-gray-200"> {!! $users->links() !!} </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
