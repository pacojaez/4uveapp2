<x-guest-full-page>
    <!-- PRUEBA DE LOGIN -->
    <section class="flex items-stretch w-full min-h-screen text-white ">
        <div class="relative items-center hidden w-2/3 bg-gray-500 bg-no-repeat bg-cover lg:flex"
            style="background-image: url(https://images.unsplash.com/photo-1609618992870-f519a360482e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="absolute inset-0 z-0 bg-black opacity-40"></div>
            <div class="z-10 w-full px-24">
                <h1 class="text-5xl font-bold tracking-wide text-left">Vende tu STOCK</h1>
                <p class="my-4 text-3xl">cóbralo al contado</p>
                <h1 class="text-5xl font-bold tracking-wide text-left">Y consigue los artículos</h1>
                <p class="my-4 text-3xl">que necesitas</p>
                <h1 class="text-5xl font-bold tracking-wide text-left">a precio de ganga</h1>
            </div>
            <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 space-x-4 text-center">
            </div>
        </div>
        <div class="z-0 flex items-center justify-center w-full px-0 text-center lg:w-1/2 md:px-16"
            style="background-color: #161616;">
            <div class="absolute inset-0 z-10 items-center bg-gray-500 bg-no-repeat bg-cover lg:hidden"
                style="background-image: url(https://images.unsplash.com/photo-1609618992870-f519a360482e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                <div class="absolute inset-0 z-0 bg-black opacity-60"></div>
            </div>
            <div class="z-20 py-6">
                <div class="relative flex justify-center w-full bg-gray-600 bg-opacity-10 rounded-3xl">
                    <x-jet-application-logo />
                </div>
                <p class="text-gray-100">
                    Entra con tu email
                </p>
                <form method="POST" action="{{ route('login') }}" class="w-full px-4 mx-auto lg:px-0">
                    @csrf
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1 text-gray-700" type="email" name="email"
                            required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input x-model="password" id="password" class="block w-full mt-1 text-gray-700"
                            type="password" name="password" required />
                    </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>

                    </div>
                    <div class="mt-3 text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <x-jet-button class="mt-3 ml-4">
                        {{ __('ENTRAR') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </section>
    <!-- FIN PRUEBA LOGIN -->

</x-guest-full-page>
