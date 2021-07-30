<x-guest-full-page>
    <x-jet-validation-errors class="w-5/6 mb-4" />

    <x-slot name="logo">
        {{-- <x-jet-authentication-card-logo /> --}}
        <x-jet-application-logo />

    </x-slot>
    <x-slot name="slot">

        <div class="container relative items-center max-w-full px-6 mx-auto bg-yellow-300 bg-no-repeat bg-cover md:py-24">
            <div class="w-5/6 px-6 mx-auto">
                <div class="relative flex flex-wrap">
                    <div
                        class="absolute w-full h-full transform bg-blue-400 bg-opacity-50 shadow-lg card rounded-3xl -rotate-6">
                    </div>
                    <div
                        class="absolute w-full h-full transform bg-red-400 bg-opacity-50 shadow-lg card rounded-3xl rotate-6">
                    </div>
                    <div class="relative flex justify-center w-full bg-gray-300 bg-opacity-10 rounded-3xl">
                        <x-jet-application-logo />
                    </div>
                    <div class="relative w-full bg-gray-300 bg-opacity-10 rounded-3xl">
                        <div class="md:mt-6">
                            <div class="font-semibold text-center text-black">
                                FORMULARIO DE REGISTRO
                            </div>
                            @if (count($errors) > 0)
                                <div class="w-full p-2 m-2 text-center bg-gray-200 rounded">
                                    <p class="font-semibold text-red-500 text-">Upss!! Corrige los siguientes errores:</p>
                                    <ol>
                                        @foreach ($errors->all() as $message)
                                            <li class="font-semibold text-center">{{ trans($message) }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}" class="w-full px-4 mx-auto lg:px-0"
                                x-data="{password: '',password_confirm: ''}">
                                @csrf
                                <div class="max-w-lg mx-auto ">
                                    <div>
                                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name"
                                            :value="old('name')" required autofocus />
                                            @error('name')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="surname" value="{{ __('Apellidos') }}" />
                                        <x-jet-input id="surname" class="block w-full mt-1" type="text" name="surname"
                                            :value="old('surname')" required autofocus />
                                            @error('surname')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
                                        <x-jet-input id="phone" class="block w-full mt-1" type="text" name="phone"
                                            :value="old('phone')" required autofocus />
                                            @error('phone')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email"
                                            :value="old('email')" required autofocus />
                                            @error('email')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="block w-full mt-1" type="password"
                                            name="password" required autocomplete="new-password" />
                                            @error('password')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-jet-input id="password_confirmation" class="block w-full mt-1"
                                            type="password" name="password_confirmation" required
                                            autocomplete="new-password" />
                                    </div>
                                    <div>
                                        <x-jet-label for="company" value="{{ __('Empresa') }}" />
                                        <x-jet-input id="company" class="block w-full mt-1" type="text" name="company"
                                            :value="old('company')" required autofocus />
                                            @error('company')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="comercial_name" value="{{ __('Nombre Comercial') }}" />
                                        <x-jet-input id="comercial_name" class="block w-full mt-1" type="text"
                                            name="comercial_name" :value="old('comercial_name')" required autofocus />
                                            @error('comercial_name')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="CIF" value="{{ __('CIF') }}" />
                                        <x-jet-input id="CIF" class="block w-full mt-1" type="text" name="CIF"
                                            :value="old('CIF')" required autofocus />
                                            @error('CIF')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="adress" value="{{ __('Dirección') }}" />
                                        <x-jet-input id="adress" class="block w-full mt-1" type="text" name="adress"
                                            :value="old('adress')" required autofocus />
                                            @error('adress')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="city" value="{{ __('Localidad') }}" />
                                        <x-jet-input id="city" class="block w-full mt-1" type="text" name="city"
                                            :value="old('city')" required autofocus />
                                            @error('city')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
                                        <x-jet-input id="cp" class="block w-full mt-1" type="number" name="cp"
                                            :value="old('cp')" pattern="{0-9}" required autofocus />
                                            @error('cp')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div>
                                        <x-jet-label for="province" value="{{ __('Provincia') }}" />
                                        <x-jet-input id="province" class="block w-full mt-1" type="text" max=5
                                            name="province" :value="old('province')" required autofocus />
                                            @error('province')
                                                <span class="text-red-800 error">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="block w-full mt-1">
                                        <div class="flex flex-col px-2 text-left">
                                            <label for="tipo_usuario" class="mr-3">Tipo de Usuario:</label>
                                        </div>
                                        <select id="tipo_usuario" name="tipo_usuario"
                                            class="w-32 py-3 pl-3 pr-8 leading-tight text-gray-600 border-none rounded appearance-none">
                                            <option value="Papelería" selected>Papelería</option>
                                            <option value="Cadena de Papelerias">Cadena de Papelerías</option>
                                            <option value="Suministrador a Oficinas con Punto de Venta">Suministrador a
                                                Oficinas con Punto de Venta</option>
                                            <option value="Suministrador a Colegios con Almacén">Suministrador a
                                                Colegios con Almacén</option>
                                            <option value="Suministrador a Oficinas con Almacén">Suministrador a
                                                Oficinas con Almacén</option>
                                            <option value="Mayorista">Mayorista</option>
                                            <option value="Mayorista con Punto de Venta">Mayorista con Punto de Venta
                                            </option>
                                            <option value="Importador">Importador</option>
                                            <option value="Fabricante">Fabricante</option>
                                            <option value="Distribuidor">Distribuidor</option>
                                        </select>
                                    </div>
                                    <div class="flex justify-start">
                                        <label class="items-center block my-4 font-bold text-gray-500">
                                            <input class="top-0 leading-loose text-pink-600" type="checkbox" required />
                                            <span class="py-2 ml-2 text-sm text-left text-gray-600">Aceptar los
                                                <a href="#"
                                                    class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                                    Términos y Condiciones del sitio web
                                                </a>y
                                                <a href="#"
                                                    class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                                    política de privacidad.</a>
                                            </span>
                                        </label>
                                    </div>
                                    <button
                                        class="block w-full px-6 py-3 mt-3 text-lg font-semibold text-white bg-gray-800 rounded-lg shadow-xl hover:text-white hover:bg-black">
                                        Registro
                                    </button>
                                </div>
                            </form>
                            <div class="flex justify-center py-6 text-sm font-semibold">
                                <a href="/login"
                                    class="font-normal text-black border-b-2 border-gray-200 hover:border-teal-500">¿Ya
                                    estás registrado?
                                    <span class="font-semibold text-black">
                                        Login
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </x-slot>
    {{-- </x-jet-authentication-card> --}}
</x-guest-full-page>
