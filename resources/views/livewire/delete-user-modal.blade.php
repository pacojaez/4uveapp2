<x-modal>
    <x-slot name="title">
        Borrar USUARIO con id:
        {{ $user_id }}
    </x-slot>
    <x-slot name="content">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                    </div>
                    <div class="mx-auto my-10 text-2xl text-center text-gray-800">
                        ¿Estás seguro que quieres borrar este Usuario?:
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="buttons">
        <button wire:click="$emit('closeModal')"
            class="w-full px-3 py-2 m-2 text-center text-green-400 border-2 border-green-600 rounded-lg cursor-pointer hover:bg-green-600 hover:text-green-200">
            X Volver
        </button>
        <button wire:click="$emit('destroyUser')" class="w-full px-3 py-2 m-2 text-center text-red-400 border-2 border-red-600 rounded-lg cursor-pointer hover:bg-red-600 hover:text-red-200">
            Eliminar definitivamente
        </button>
    </x-slot>
</x-modal>
