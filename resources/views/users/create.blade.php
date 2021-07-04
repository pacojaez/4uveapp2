<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crear Usuario')  }}
        </h2>
    </x-slot>
    @if (session()->has('message'))
    <div
        class="relative flex flex-col py-5 pl-6 pr-8 bg-white rounded-md shadow sm:flex-row sm:items-center sm:pr-6 alert-success">
        <div class="flex flex-row items-center w-full pb-4 border-b sm:border-b-0 sm:w-auto sm:pb-0">
            <div class="text-green-500">
                <svg class="w-6 h-6 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-3 text-sm font-medium">{{ session('message') }}</div>
        </div>

        <div
            class="absolute ml-auto text-gray-400 cursor-pointer sm:relative sm:top-auto sm:right-auto right-4 top-4 hover:text-gray-800">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </div>

    </div>
    @endif

    <div class="flex flex-col items-center justify-center bg-gray-100 min-w-screen">
        <div class="w-5/6 mr-3 lg:w-5/6 rounded-xl bg-gradient-to-b from-blue-100 to-blue-400">
            <div class="flex flex-col">
                <div id="converters-area" class="px-4 py-5">
                    <div class="flex flex-col text-gray-700">
                        <form method="POST" action="{{ route('user.store') }}"
                            x-data="{password: '', password_confirm: ''}">
                            @csrf
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <div>
                                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name"
                                            :value="old('name')" required autofocus />
                                    </div>

                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="surname" value="{{ __('Apellidos') }}" />
                                    <x-jet-input id="surname" class="block w-full mt-1" type="text" name="surname"
                                        :value="old('surname')" required autofocus />

                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
                                    <x-jet-input id="phone" class="block w-full mt-1" type="text" name="phone"
                                        :value="old('phone')" required autofocus />
                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block w-full mt-1" type="email" name="email"
                                        :value="old('email')" required autofocus />

                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password"
                                        required />

                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation"
                                        class="block w-full mt-1" type="password" name="password_confirmation"
                                        required />

                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="company" value="{{ __('Empresa') }}" />
                                    <x-jet-input id="company" class="block w-full mt-1" type="text" name="company"
                                        :value="old('company')" required autofocus />

                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">

                                    <x-jet-label for="comercial_name" value="{{ __('Nombre Comercial') }}" />
                                    <x-jet-input id="comercial_name" class="block w-full mt-1" type="text"
                                        name="comercial_name" :value="old('comercial_name')" required autofocus />
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="CIF" value="{{ __('CIF') }}" />
                                    <x-jet-input id="CIF" class="block w-full mt-1" type="text" name="CIF"
                                        :value="old('CIF')" required autofocus />

                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">

                                    <x-jet-label for="adress" value="{{ __('Dirección') }}" />
                                    <x-jet-input id="adress" class="block w-full mt-1" type="text" name="adress"
                                        :value="old('adress')" required autofocus />
                                </div>
                            </div>

                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="city" value="{{ __('Localidad') }}" />
                                    <x-jet-input id="city" class="block w-full mt-1" type="text" name="city"
                                        :value="old('city')" required autofocus />

                                </div>
                                <div class="flex flex-col w-3/6 px-2 text-center">

                                    <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
                                    <x-jet-input id="cp" class="block w-full mt-1" type="number" name="cp"
                                        :value="old('cp')" pattern="{0-9}" required autofocus />
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="flex flex-col w-3/6 px-2 text-center">
                                    <x-jet-label for="province" value="{{ __('Provincia') }}" />
                                    <x-jet-input id="province" class="block w-full mt-1" type="text" max=5
                                        name="province" :value="old('province')" required autofocus />

                                </div>
                                <div class="flex flex-col px-2 text-center">

                                    <div class="flex flex-col px-2 text-center">
                                        <div class="flex flex-col px-2 text-right">
                                            <label for="tipo_usuario" class="mr-3">Tipo de Usuario:</label>
                                        </div>
                                        <select id="tipo_usuario" name="tipo_usuario"
                                            class="w-32 py-3 pl-3 pr-8 leading-tight text-gray-600 border-none rounded appearance-none">
                                            <option value="Papeleria" selected>Papelería</option>
                                            <option value="Cadena de Papelerias">Cadena de Papelerías</option>
                                            <option value="Suministrador a Oficinas con Punto de Venta">Suministrador a
                                                Oficinas con Punto de Venta</option>
                                            <option value="Suministrador a Colegios con Almacen">Suministrador a
                                                Colegios con Almacén</option>
                                            <option value="Suministrador a Oficinas con Almacen">Suministrador a
                                                Oficinas con Almacén</option>
                                            <option value="Mayorista">Mayorista</option>
                                            <option value="Mayorista con Punto de Venta">Mayorista con Punto de Venta
                                            </option>
                                            <option value="Importador">Importador</option>
                                            <option value="Fabricante">Fabricante</option>
                                            <option value="Distribuidor">Distribuidor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="block w-full px-6 py-3 mt-3 text-lg font-semibold text-white bg-gray-800 rounded-lg shadow-xl hover:text-white hover:bg-black">
                                Añadir Usuario
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

@push('scripts')
<script>
    $(document).ready(function() {
    setTimeout(function() {
        $(".alert-success").fadeOut(3000);
    },3000);
});
</script>
@endpush
