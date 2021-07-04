<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('welcome') }}">
                        <x-jet-application-mark class="block w-auto h-12" />
                    </a>
                    <!-- BUSCADOR -->
                    {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <input class="max-w-md px-3 mt-2 mb-2 ml-20 text-xl rounded shadow-lg sm:max-w-1/2 h-5/6 focus:outline-none focus:shadow-outline" type="search" placeholder="Buscar Productos...">
                    </div> --}}
                    <x-jet-nav-link href="{{ route('allproducts') }}" class="m-2 text-lg text-red-600 font-title">
                        {{ __('Productos') }}
                    </x-jet-nav-link>
                    {{-- <x-jet-nav-link href="{{ route('cart') }}" class="m-5 font-bold">
                        {{ __('Cart') }} ({{ $count }})
                    </x-jet-nav-link> --}}
                    @livewire('nav-cart')

                    <div class="justify-end flex-grow hidden sm:flex sm:items-center sm:ml-6 place-items-center">
                        <x-jet-nav-link href="{{ route('contact') }}" class="m-2 text-lg text-red-600 font-title">
                            {{ __('Contacto') }}
                        </x-jet-nav-link>
                    </div>
                    {{-- <x-jet-nav-link href="{{ route('cart') }}" data-turbolinks-action="replace" class="m-5 font-bold">
                        Cart ({{ $cartTotal }})
                    </x-jet-nav-link> --}}
                </div>
                {{-- <x-jet-nav-link href="{{ route('cart') }}" data-turbolinks-action="replace" class="m-5 font-bold">
                {{ __('Cart'({{$cartTotal}})) }}
                </x-jet-nav-link> --}}
                {{-- <a href="{{ route('cart') }}" data-turbolinks-action="replace" class="block mt-4 mr-4 lg:inline-block lg:mt-0">
                Cart({{ $cartTotal }})
                </a> --}}
                @if(Auth::user())
                <div class="justify-end flex-grow hidden sm:flex sm:items-center sm:ml-6 place-items-center">
                    <!-- Settings Dropdown -->
                    <div class="relative ml-3">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 text-lg leading-4 text-red-600 transition bg-white border border-transparent rounded-md font-title hover:text-gray-700 focus:outline-none">
                                        Bienvenido, {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Gestionar tu Cuenta') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Perfil') }}
                                </x-jet-dropdown-link>
                                @if(Auth::user())
                                <x-jet-dropdown-link href="{{ route('products.wizard') }}">
                                    {{ __('Añadir Oferta') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ofertas.index') }}">
                                    {{ __('Mis Ofertas') }}
                                </x-jet-dropdown-link>
                                @endif
                                @if(Auth::user()->isAdmin())
                                <x-jet-dropdown-link href="{{ route('products.index') }}">
                                    {{ __('Todos los Productos') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ url('inactive') }}">
                                    {{ __('Productos INACTIVOS') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ofertas.index') }}">
                                    {{ __('Todas las Ofertas') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ url('ofertasinactive') }}">
                                    {{ __('Ofertas INACTIVAS') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('user.create') }}">
                                    {{ __('Añadir Usuario') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('users.index') }}">
                                    {{ __('Todos los Usuarios') }}
                                </x-jet-dropdown-link>
                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
                @else
                    <div class="items-center justify-end flex-grow hidden sm:flex">
                        <x-jet-nav-link href="{{ route('login') }}" class="m-5 text-red-600 font-title">
                            {{ __('Login') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('register') }}" class="m-5 text-red-600 font-title">
                            {{ __('Registro') }}
                        </x-jet-nav-link>
                    </div>

                @endif
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
    <!-- SUBMENU DE CATEGORIAS -->
    <div class="hidden m-2 space-x-8 shadow-md sm:-my-px sm:flex">
        @livewire('categories-navbar')
    </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options Menu Principal -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-nav-link href="{{ route('contact') }}" class="m-5 text-red-600 font-title">
                        {{ __('Contacto') }}
                    </x-jet-nav-link>
                   {{-- <a href="{{route('contact')}}" >Contact</a> --}}
                </div>
            </div>
        </div>
        {{-- <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="pt-2 pb-3 space-y-1">
                    @if(Auth::user())
                    <div class="justify-end flex-grow hidden sm:flex sm:items-center sm:ml-6 place-items-center">
                        <!-- Settings Dropdown -->
                        <div class="relative ml-3">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                        <img class="object-cover w-8 h-8 rounded-full"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                    @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                            Bienvenido, {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('GESTIONAR CUENTA') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Tu perfil') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </div>
                    @else
                    <div class="flex items-center justify-end flex-grow">
                        <x-jet-nav-link href="{{ route('login') }}" class="m-5 font-bold">
                            {{ __('Login') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('register') }}" class="m-5 font-bold">
                            {{ __('Registro') }}
                        </x-jet-nav-link>
                    </div>
                    @endif
                   {{-- <a href="{{route('contact')}}" >Contact</a>
                </div>
            </div>
        </div> --}}
        @if(Auth::user())
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-nav-link href="{{ route('dashboard') }}" class="m-5 text-red-600 font-title">
                        {{ __('Panel de Control') }}
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
        @endif
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="pt-2 pb-3 space-y-1">
                    @livewire('categories-navbar')
                </div>
            </div>
        </div>
    </div>
</nav>
