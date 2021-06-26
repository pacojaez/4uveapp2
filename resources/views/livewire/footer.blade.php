<div class="w-full mb-0 bg-gray-600">
    <div class="flex flex-row justify-center px-10 py-4 text-xl text-yellow-100 font-title">
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">Quienes Somos</div>
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles"><a href="{{ route( 'avisolegal' ) }}">Aviso Legal </a></div>
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">Mapa Web</div>
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">Condiciones Generales</div>
      </div>
      <div class="flex flex-row justify-center px-10 py-4 text-xl text-yellow-100 font-title">
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">Whatsapp</div>
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">Teléfono</div>
        <div class="mx-4 pointer hover:underline hover:text-red-400 font-subtitles">LinkedLn</div>
      </div>
      <div class="flex flex-row justify-center px-10 py-4 text-xl text-yellow-100 font-subtitle">
        <div class="mx-4">&copy {{ date('Y') }}</div>
        <div class="mx-4">Made with love by PJR</div>
      </div>

    {{-- <footer class="">
        <div class="border-t md:px-4 md:pt-2 md:pb-5">
            <div class="flex flex-wrap mx-auto md:max-w-screen-lg">
                <section class="relative w-full px-4 pb-4 font-light text-gray-700 border-b md:py-3 md:border-none md:w-full">
                    <div class="md:hidden">
                        <button onclick="toggleFooterSection(event)"
                            class="w-full py-4 text-xs font-bold tracking-wider text-left text-pink-700 uppercase border-t border-white focus:outline-none"
                            type="button">
                                Quienes Somos
                        </button>
                    </div>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase " href="#">
                        Quienes Somos
                    </a>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase " href="#">
                        Quienes Somos
                    </a>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase " href="#">
                        Quienes Somos
                    </a>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase " href="#">
                        Quienes Somos
                    </a>
                    <article class="h-0 -mt-4 overflow-hidden md:h-auto md:mt-0">
                        <ul class="my-5 text-sm tracking-wide">
                            <li class="my-3 tracking-wide">
                                <a href="#">AVISO LEGAL</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">POLÍTICA DE COOKIES</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">CONDICIONES GENERALES</a>
                            </li>
                        </ul>
                    </article>
                </section>
                <section
                    class="relative w-full px-4 pb-4 font-light text-gray-700 border-b md:py-3 md:border-none md:w-1/4">
                    <div class="md:hidden">
                        <button onclick="toggleFooterSection(event)"
                            class="w-full py-4 text-xs font-bold tracking-wider text-left text-pink-700 uppercase border-t border-white focus:outline-none"
                            type="button">
                            CORPORATIVO
                        </button>
                    </div>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase md:block" href="#">
                        CORPORATIVO
                    </a>
                    <article class="h-0 -mt-4 overflow-hidden md:h-auto md:mt-0">
                        <ul class="my-5 text-sm tracking-wide">
                            <li class="my-3 tracking-wide">
                                <a href="#">QUIENES SOMOS</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">MAPA WEB</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">CONTACTO</a>
                            </li>
                        </ul>
                    </article>
                </section>
                <section
                    class="relative w-full px-4 pb-4 font-light text-gray-700 border-b md:py-3 md:border-none md:w-1/4">
                    <div class="md:hidden">
                        <button onclick="toggleFooterSection(event)"
                            class="w-full py-4 text-xs font-bold tracking-wider text-left text-pink-700 uppercase border-t border-white focus:outline-none"
                            type="button">
                            RRSS
                        </button>
                    </div>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase md:block" href="#">
                        RRSS
                    </a>
                    <article class="h-0 -mt-4 overflow-hidden md:h-auto md:mt-0">
                        <ul class="my-5 text-sm tracking-wide">
                            <li class="my-3 tracking-wide">
                                <a href="#">Enlace a Linkedin</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">MAIL</a>
                            </li>
                        </ul>
                    </article>
                </section>
                <section
                    class="relative w-full px-4 pb-4 font-light text-gray-700 border-b md:py-3 md:border-none md:w-1/4">
                    <div class="md:hidden">
                        <button onclick="toggleFooterSection(event)"
                            class="w-full py-4 text-xs font-bold tracking-wider text-left text-pink-700 uppercase border-t border-white focus:outline-none"
                            type="button">
                            CONTACTAR POR TELÉFONO
                        </button>
                    </div>
                    <a class="hidden text-xs font-bold tracking-wider text-pink-700 uppercase md:block" href="#">
                        CONTACTAR POR TELÉFONO
                    </a>
                    <article class="h-0 -mt-4 overflow-hidden md:h-auto md:mt-0">
                        <ul class="my-5 text-sm tracking-wide">
                            <li class="my-3 tracking-wide">
                                <a href="#">TELÉFONO</a>
                            </li>
                            <li class="my-3 tracking-wide">
                                <a href="#">WHATSAPP</a>
                            </li>
                        </ul>
                    </article>
                </section>

            </div>
    </footer> --}}
    {{-- @push('scripts')
    <script>
        function toggleFooterSection(e) {
          const list = e.target.parentElement.parentElement.querySelector(
            "article"
          );
          if (list.classList.contains("h-0")) {
            list.classList.remove("h-0");
          } else {
            list.classList.add("h-0");
          }
        }
    </script>
    @endpush--}}
</div>
