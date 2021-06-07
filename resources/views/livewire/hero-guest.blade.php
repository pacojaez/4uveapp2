<div>
    <div class="mt-20 text-center lg:5/6 xl:w-3/4 lg:mt-20 lg:ml-6">
        <div class="text-6xl font-bold leading-none text-gray-900">Si no se vende, !SÚBELO!</div>
        <div class="mt-6 text-2xl antialiased font-light text-true-gray-500">
            Cóbralo al contado, y encuentra los artículos que necesitas al mejor precio.
        </div>
        <div  class="flex items-center justify-center text-center">
            <x-jet-nav-link href="{{ route('register') }}"
                class="px-8 py-6 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                <span class="text-3xl text-white">{{ __('Empieza ahora') }}</span>
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('login') }}"
                class="px-8 py-6 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                <span class="text-3xl text-white">{{ __('Login') }}</span>
            </x-jet-nav-link>
        </div>
    </div>
    {{-- <div class="mt-20 text-left lg:3/6 xl:w-2/4 lg:mt-40 lg:ml-16">
        <div class="text-6xl font-bold leading-none text-gray-900">Si no se vende, !SÚBELO!</div>
        <div class="mt-6 text-2xl antialiased font-light text-true-gray-500">
            Cóbralo al contado, y encuentra los artículos que necesitas al mejor precio.
        </div>

    </div> --}}
</div>
