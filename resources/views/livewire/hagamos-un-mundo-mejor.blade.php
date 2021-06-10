<div class="p-4 mb-2 bg-blue-200 md:h-screen">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
        <div class="mt-2 text-center lg:6/6 xl:w-4/4 lg:mt-20 lg:ml-6">
            <div class="mt-10 text-6xl leading-none text-red-600 font-title">Hagamos juntos un Mundo Mejor</div>
            <div class="px-10 mt-10 text-3xl antialiased text-gray-800 font-subtitle">
                Por que creemos que es posible organizarnos entre todos en base a un consumo más colaborativo y
                sostenible, queremos impulsar una oferta justa para la Compra-Venta de papelería y liquidación de stocks
                sobrantes, ayudando a todos los comerciantes, optimizando los recursos disponibles y consiguiendo
                importantes ahorros y beneficios,tanto económicos como medioambientales
            </div>
            <div class="flex justify-center">
                <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-2">
                    <x-jet-nav-link href="{{ route('register') }}"
                        class="px-8 py-8 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                        <span class="text-2xl text-white">{{ __('REGISTRO USUARIOS') }}</span>
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('allproducts') }}"
                        class="px-8 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none pl-14 bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                        <span class="text-2xl text-white">{{ __('VER PRODUCTOS') }}</span>
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>
</div>
