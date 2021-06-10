<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('welcome') }}">
                        <x-jet-application-mark class="block w-auto h-9" />
                    </a>
                    <h3 class="ml-10 text-xl text-red-500 font-title">la web de las papelerías</h3>
                </div>
                <div class="items-center justify-end flex-grow hidden md:flex">
                    <x-jet-nav-link href="{{ route('register') }}" class="m-5 font-bold">
                        {{ __('VENDER') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('allproducts') }}" class="m-5 font-bold">
                        {{ __('COMPRAR') }}
                    </x-jet-nav-link>
                </div>

            </div>
            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options Menu Principal -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-nav-link href="{{ route('register') }}" class="m-5 font-bold">
                        {{ __('VENDER') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('allproducts') }}" class="m-5 font-bold">
                        {{ __('COMPRAR') }}
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
