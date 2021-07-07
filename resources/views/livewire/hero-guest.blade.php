<div x-cloak class="flex flex-wrap content-center md:h-screen">
    <div class="w-full text-center">
        <div class="text-6xl leading-none text-red-600 py-auto font-title">
            Si no se vende, súbelo!,
        </div>
        <div class="py-4 text-4xl antialiased text-red-600 font-subtitle text-true-gray-500">
            cóbralo al contado y encuentra los artículos que necesitas al mejor precio.
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-2">
                <x-jet-nav-link href="{{ route('register') }}"
                    class="py-8 pl-16 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                    <span class="text-2xl text-white">{{ __('Empieza ahora') }}</span>
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('login') }}"
                    class="px-8 py-6 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                    <span class="text-2xl text-white">{{ __('USUARIO REGISTRADO') }}</span>
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</div>
