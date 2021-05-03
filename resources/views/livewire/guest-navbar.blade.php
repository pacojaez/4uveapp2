<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                    <!-- BUSCADOR -->
                    <input class="max-w-md sm:max-w-full h-5/6 px-3 rounded ml-20 mt-2 mb-2 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg" type="search" placeholder="Buscar Productos...">
                </div>
                <div class="flex-grow flex items-center justify-end">
                    <x-jet-nav-link href="{{ route('login') }}" class="font-bold m-5">
                        {{ __('Login') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('register') }}" class="font-bold m-5">
                        {{ __('Register') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- SUBMENU DE CATEGORIAS -->
    @livewire('categories-navbar')
    

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
    </div>
</nav>
