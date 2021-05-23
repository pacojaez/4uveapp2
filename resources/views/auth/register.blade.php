<x-guestfullpage-layout>
    <x-jet-validation-errors class="w-5/6 mb-4" />
    {{-- <x-jet-authentication-card> --}}
    <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
    <!-- Prueba registro -->
    {{-- <section class="flex items-stretch w-full min-h-screen text-white ">
            <p class="text-gray-100">
                Formulario de Registro
            </p>
            <form method="POST" action="{{ route('register') }}" class="w-full px-4 mx-auto lg:px-0">
    @csrf
    <div class="relative items-center hidden w-2/3 bg-gray-500 bg-no-repeat bg-cover lg:flex"
        style="background-image: url(https://images.unsplash.com/photo-1609618992870-f519a360482e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
        <div class="absolute inset-0 z-0 bg-black opacity-40"></div>
        <div class="z-10 w-full px-24">

        </div>
    </div>
    </form>
    <div class="z-0 flex items-center justify-center w-full px-0 text-center lg:w-1/2 md:px-16"
        style="background-color: #161616;">
        <div class="absolute inset-0 z-10 items-center bg-gray-500 bg-no-repeat bg-cover lg:hidden"
            style="background-image: url(https://images.unsplash.com/photo-1609618992870-f519a360482e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="absolute inset-0 z-0 bg-black opacity-60"></div>
        </div>
        <div class="z-20 py-6">
            <h1>
                4UVE
            </h1>
            {{-- <h1 class="my-6">
                        <svg viewBox="0 0 247 31" class="inline-flex w-auto h-7 sm:h-8"><path fill="rgba(99,102,241, .8)" fill-rule="evenodd" clip-rule="evenodd" d="M25.517 0C18.712 0 14.46 3.382 12.758 10.146c2.552-3.382 5.529-4.65 8.931-3.805 1.941.482 3.329 1.882 4.864 3.432 2.502 2.524 5.398 5.445 11.722 5.445 6.804 0 11.057-3.382 12.758-10.145-2.551 3.382-5.528 4.65-8.93 3.804-1.942-.482-3.33-1.882-4.865-3.431C34.736 2.92 31.841 0 25.517 0zM12.758 15.218C5.954 15.218 1.701 18.6 0 25.364c2.552-3.382 5.529-4.65 8.93-3.805 1.942.482 3.33 1.882 4.865 3.432 2.502 2.524 5.397 5.445 11.722 5.445 6.804 0 11.057-3.381 12.758-10.145-2.552 3.382-5.529 4.65-8.931 3.805-1.941-.483-3.329-1.883-4.864-3.432-2.502-2.524-5.398-5.446-11.722-5.446z" fill="#06B6D4"></path><path fill="#fff" fill-rule="evenodd" clip-rule="evenodd" d="M76.546 12.825h-4.453v8.567c0 2.285 1.508 2.249 4.453 2.106v3.463c-5.962.714-8.332-.928-8.332-5.569v-8.567H64.91V9.112h3.304V4.318l3.879-1.143v5.937h4.453v3.713zM93.52 9.112h3.878v17.849h-3.878v-2.57c-1.365 1.891-3.484 3.034-6.285 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.285 2.999V9.112zm-5.674 14.636c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm16.016-17.313c-1.364 0-2.477-1.142-2.477-2.463a2.475 2.475 0 012.477-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.879v17.849h-3.879zm8.368 0V.9h3.878v26.06h-3.878zm29.053-17.849h4.094l-5.638 17.849h-3.807l-3.735-12.03-3.771 12.03h-3.806l-5.639-17.849h4.094l3.484 12.315 3.771-12.315h3.699l3.734 12.315 3.52-12.315zm8.906-2.677c-1.365 0-2.478-1.142-2.478-2.463a2.475 2.475 0 012.478-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.878v17.849h-3.878zm17.812-18.313c4.022 0 6.895 2.713 6.895 7.354V26.96h-3.878V16.394c0-2.713-1.58-4.14-4.022-4.14-2.55 0-4.561 1.499-4.561 5.14v9.567h-3.879V9.112h3.879v2.285c1.185-1.856 3.124-2.749 5.566-2.749zm25.282-6.675h3.879V26.96h-3.879v-2.57c-1.364 1.892-3.483 3.034-6.284 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.284 2.999V1.973zm-5.674 21.775c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm22.553 3.677c-5.423 0-9.481-4.105-9.481-9.389 0-5.318 4.058-9.388 9.481-9.388 3.519 0 6.572 1.82 8.008 4.605l-3.34 1.928c-.79-1.678-2.549-2.749-4.704-2.749-3.16 0-5.566 2.392-5.566 5.604 0 3.213 2.406 5.605 5.566 5.605 2.155 0 3.914-1.107 4.776-2.749l3.34 1.892c-1.508 2.82-4.561 4.64-8.08 4.64zm14.472-13.387c0 3.249 9.661 1.285 9.661 7.89 0 3.57-3.125 5.497-7.003 5.497-3.591 0-6.177-1.607-7.326-4.177l3.34-1.927c.574 1.606 2.011 2.57 3.986 2.57 1.724 0 3.052-.571 3.052-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.909-5.462 6.572-5.462 2.945 0 5.387 1.357 6.644 3.713l-3.268 1.82c-.647-1.392-1.904-2.035-3.376-2.035-1.401 0-2.622.607-2.622 1.892zm16.556 0c0 3.249 9.66 1.285 9.66 7.89 0 3.57-3.124 5.497-7.003 5.497-3.591 0-6.176-1.607-7.326-4.177l3.34-1.927c.575 1.606 2.011 2.57 3.986 2.57 1.724 0 3.053-.571 3.053-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.908-5.462 6.572-5.462 2.944 0 5.386 1.357 6.643 3.713l-3.268 1.82c-.646-1.392-1.903-2.035-3.375-2.035-1.401 0-2.622.607-2.622 1.892z" fill="#000"></path></svg>
                    </h1> --}}
            {{-- <div class="py-6 space-x-2">
                        <span class="inline-flex items-center justify-center w-10 h-10 text-lg font-bold border-2 border-white rounded-full">f</span>
                        <span class="inline-flex items-center justify-center w-10 h-10 text-lg font-bold border-2 border-white rounded-full">G+</span>
                        <span class="inline-flex items-center justify-center w-10 h-10 text-lg font-bold border-2 border-white rounded-full">in</span>
                    </div> --}}
            {{-- <p class="text-gray-100">
                        Formulario de Registro
                    </p>
                    <form method="POST" action="{{ route('register') }}" class="w-full px-4 mx-auto lg:px-0">
            @csrf
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

            </div>
            {{-- <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
            </x-jet-button>


            {{-- <div class="left-0 right-0 flex justify-center p-4 mt-16 space-x-4 text-center lg:hidden ">
                            <a href="#">
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#">
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                            <a href="#">
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section> --}}
            <!-- fin prueba registro -->

            {{-- <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            </form> --}}
            {{-- </x-jet-authentication-card> --}}
            {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}

            <div class="container relative items-center max-w-full px-6 mx-auto bg-gray-500 bg-no-repeat bg-cover md:py-24"
                style="background-image: url(https://images.unsplash.com/photo-1609618992870-f519a360482e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                <div class="w-5/6 px-6 mx-auto">
                    <div class="relative flex flex-wrap">
                        <div
                            class="absolute w-full h-full transform bg-blue-400 bg-opacity-50 shadow-lg card rounded-3xl -rotate-6">
                        </div>
                        <div
                            class="absolute w-full h-full transform bg-red-400 bg-opacity-50 shadow-lg card rounded-3xl rotate-6">
                        </div>
                        <div class="relative w-full bg-gray-300 bg-opacity-10 rounded-3xl">
                            <div class="md:mt-6">
                                <div class="font-semibold text-center text-black">
                                    FORMULARIO DE REGISTRO
                                </div>
                                <div class="text-center text-black font-base">
                                    4uve
                                </div>
                                <form method="POST" action="{{ route('register') }}" class="w-full px-4 mx-auto lg:px-0"
                                    x-data="{password: '',password_confirm: ''}">
                                    @csrf
                                    {{-- <form class="mt-8" x-data="{password: '',password_confirm: ''}"> --}}
                                    <div class="max-w-lg mx-auto ">
                                        <div>
                                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                            <x-jet-input id="name" class="block w-full mt-1" type="text" name="name"
                                                :value="old('name')" required autofocus />
                                        </div>
                                        <div>
                                            <x-jet-label for="surname" value="{{ __('Apellidos') }}" />
                                            <x-jet-input id="surname" class="block w-full mt-1" type="text"
                                                name="surname" :value="old('surname')" required autofocus />
                                        </div>
                                        <div>
                                            <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
                                            <x-jet-input id="phone" class="block w-full mt-1" type="text" name="phone"
                                                :value="old('phone')" required autofocus />
                                        </div>
                                        <div>
                                            <x-jet-label for="email" value="{{ __('Email') }}" />
                                            <x-jet-input id="email" class="block w-full mt-1" type="email" name="email"
                                                :value="old('email')" required autofocus />
                                        </div>
                                        <div class="mt-4">
                                            <x-jet-label for="password" value="{{ __('Password') }}" />
                                            <x-jet-input id="password" class="block w-full mt-1" type="password"
                                                name="password" required autocomplete="new-password" />
                                        </div>
                                        {{-- <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input x-model="password" id="password" class="block w-full mt-1"
                                            type="password" name="password" required autocomplete="current-password" />
                                    </div> --}}
                                    <div class="mt-4">
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-jet-input x-model="password_confirmation" id="password_confirmation"
                                            class="block w-full mt-1" type="password" name="password_confirmation"
                                            required />
                                    </div>
                                    {{-- <div class="flex justify-start p-1 mt-3 ml-4">
                                <ul>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password == password_confirmation && password.length > 0, 'bg-red-200 text-red-700':password != password_confirmation || password.length == 0}"
                                             class="p-1 rounded-full fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password == password_confirmation && password.length > 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password != password_confirmation || password.length == 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password == password_confirmation && password.length > 0, 'text-gray-900':password != password_confirmation || password.length == 0}"
                                              class="ml-3 text-sm font-bold"
                                              x-text="password == password_confirmation && password.length > 0 ? 'Password correcta' : 'Passwords no coinciden' "></span>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                             class="p-1 rounded-full fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password.length > 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password.length < 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password.length > 7, 'text-gray-900':password.length < 7 }"
                                              class="ml-3 text-sm font-bold"
                                              x-text="password.length > 7 ? 'Tu password es suficientemente larga' : 'Al menos 8 caracteres' "></span>
                                    </li>
                                </ul>
                            </div>  --}}
                                    <div>
                                        <x-jet-label for="company" value="{{ __('Empresa') }}" />
                                        <x-jet-input id="company" class="block w-full mt-1" type="text" name="company"
                                            :value="old('company')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="comercial_name" value="{{ __('Nombre Comercial') }}" />
                                        <x-jet-input id="comercial_name" class="block w-full mt-1" type="text"
                                            name="comercial_name" :value="old('comercial_name')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="CIF" value="{{ __('CIF') }}" />
                                        <x-jet-input id="CIF" class="block w-full mt-1" type="text" name="CIF"
                                            :value="old('CIF')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="adress" value="{{ __('Dirección') }}" />
                                        <x-jet-input id="adress" class="block w-full mt-1" type="text" name="adress"
                                            :value="old('adress')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="city" value="{{ __('Localidad') }}" />
                                        <x-jet-input id="city" class="block w-full mt-1" type="text" name="city"
                                            :value="old('city')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
                                        <x-jet-input id="cp" class="block w-full mt-1" type="number" name="cp"
                                            :value="old('cp')" pattern="{0-9}" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="province" value="{{ __('Provincia') }}" />
                                        <x-jet-input id="province" class="block w-full mt-1" type="text" max=5
                                            name="province" :value="old('province')" required autofocus />
                                    </div>
                                    <div class="block w-full mt-1">
                                        <div class="flex flex-col px-2 text-left">
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



                                    {{-- <div class="flex justify-start p-1 mt-3 ml-4">
                                <ul>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}"
                                             class="p-1 rounded-full fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password == password_confirm && password.length > 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password != password_confirm || password.length == 0" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}"
                                              class="ml-3 text-sm font-medium"
                                              x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                             class="p-1 rounded-full fill-current ">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path x-show="password.length > 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5 13l4 4L19 7"/>
                                                <path x-show="password.length < 7" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"/>

                                            </svg>
                                        </div>
                                        <span :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"
                                              class="ml-3 text-sm font-medium"
                                              x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "></span>
                                    </li>
                                </ul>
                            </div> --}}
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
                                    {{-- <x-jet-button class="mt-3 ml-4">
                                {{ __('REGISTRAR') }}
                                    </x-jet-button> --}}
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
    {{-- </x-jet-authentication-card> --}}
</x-guestfullpage-layout>
