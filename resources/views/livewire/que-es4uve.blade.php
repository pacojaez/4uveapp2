<div>
    <div class="py-10 text-center bg-yellow-300">
        <div class="pt-20 text-6xl font-bold leading-none text-red-500 font-title">¿Qué es 4uve?</div>
        <div class="px-20 mt-10 text-2xl antialiased font-light text-true-gray-500">
            Es una solución desarrollada exclusivamente para los profesionales de la papelería,
            el material de oficina y las manualidades.
        </div>
        <div class="px-20 mt-6 text-2xl antialiased font-light text-true-gray-500">
            Somos el primer Marketplace de nuestro sector especializado en la compra-venta de stocks al por mayor.
            Nuestro objetivo es facilitar a los detallistas, suministradores y almacenistas el intercambio de lotes de producto en liquidación,
            y también de unidades sueltas, a un precio justo, cobrando siempre al contado y de forma anónima y segura.
        </div>
        <div  class="flex items-center justify-center my-6 text-center">
            <x-jet-nav-link href="{{ route('allproducts') }}"
                class="px-8 py-6 m-2 font-bold tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                <span class="text-3xl text-white">{{ __('Mira nuestras ofertas') }}</span>
            </x-jet-nav-link>

        </div>
    </div>
</div>
