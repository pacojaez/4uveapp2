<div>
    <h2 class="mt-4 ml-12 text-xl font-semibold leading-tight text-gray-800">
        Productos en la categoría {{  $title }}:
    </h2>
    <!-- BUSCADOR -->
    {{-- <div class="space-x-8 text-center justify-items-center sm:-my-px sm:ml-10 sm:flex sm:w-full">
        <div class="relative w-1/2">
            <input type="text" wire:model.debounce.500ms="search" type="search"
                class="w-full p-2 pl-8 bg-gray-200 border border-gray-200 rounded focus:bg-white focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent"
                placeholder="Buscar Productos..." />
            <svg class="w-4 h-4 absolute left-2.5 top-3.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        {{-- <input wire:model.debounce.500ms="search" type="search" class="max-w-md px-3 mt-2 mb-2 ml-20 text-xl rounded shadow-lg sm:max-w-1/2 h-5/6 focus:outline-none focus:shadow-outline" placeholder="Buscar Productos...">
                <svg class="w-4 h-4 absolute left-2.5 top-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
    </div> --}}
    @if ($products)
    <div class="grid grid-cols-12 gap-6 p-2 m-5 bg-gray-200 rounded">
        @foreach($products as $product)
        <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
            href="{{ route('singleproduct', ['id' => $product->id]) }}">

            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>

                    <div
                        class="flex h-6 px-2 text-sm font-semibold text-white bg-green-500 rounded-full justify-items-center">
                        <span class="flex items-center">
                            {!! number_format((float)(($product->offer_prize*100)/$product->invoice_cost_price), 2) !!} %
                        </span>
                    </div>
                </div>
                <div class="md:flex-shrink-0">
                    <img class="object-cover w-full h-48 md:w-48"
                        src="{{$product->product_image }}"
                        alt="Man looking at item at a store">
                </div>
                <div class="flex-1 w-full ml-2">
                    <div>
                        <div class="mt-3 text-xl font-bold leading-8">Precio Venta: {{$product->invoice_cost_price}} €</div>
                        <div class="mt-3 text-3xl font-bold leading-8">Oferta: {{$product->offer_prize}} €</div>
                        <div class="mt-1 text-base text-gray-600">{{$product->name}}</div>
                    </div>
                </div>
            </div>
        </a>


        {{-- <div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm px-3 py-6 sm:w-1/2 lg:w-1/3">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl">
                <div class="h-56 p-4 bg-center bg-cover" style="background-image: url(https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                    <div class="flex justify-end">
                        <svg class="w-6 h-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm font-bold tracking-wide text-gray-700 uppercase">Detached house • 5y old</p>
                    <p class="text-3xl text-gray-900">$750,000</p>
                    <p class="text-gray-700">742 Evergreen Terrace</p>
                </div>
                <div class="flex p-4 text-gray-700 border-t border-gray-300">
                    <div class="inline-flex items-center flex-1">
                        <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                        </svg>
                        <p><span class="font-bold text-gray-900">3</span> Bedrooms</p>
                    </div>
                    <div class="inline-flex items-center flex-1">
                        <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                        </svg>
                        <p><span class="font-bold text-gray-900">2</span> Bathrooms</p>
                    </div>
                </div>
                <div class="px-4 pt-3 pb-4 bg-gray-100 border-t border-gray-300">
                    <div class="text-xs font-bold tracking-wide text-gray-600 uppercase">Realtor</div>
                    <div class="flex items-center pt-2">
                        <div class="w-10 h-10 mr-3 bg-center bg-cover rounded-full" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Tiffany Heffner</p>
                            <p class="text-sm text-gray-700">(555) 555-4321</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
        {{-- <main class="grid h-screen mt-0 bg-gray-100 place-items-center">
<section class="flex flex-col w-3/4 px-5 py-2 bg-white rounded-md shadow-lg md:flex-row gap-11 md:max-w-2xl">
    <div class="flex flex-col justify-between text-indigo-500">
    <img src="https://images.stockx.com/Nike-Epic-React-Flyknit-2-White-Pink-Foam-W-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1603481985" alt="" />
    <div>
        <small class="uppercase">choose size</small>
    <div class="flex flex-wrap gap-1 md:flex-nowrap">
        <a href="javascript:void(0);" class="grid px-3 py-2 transition border place-items-center hover:bg-indigo-500 hover:text-white">
        <small>5</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 text-gray-300 transition border cursor-not-allowed place-items-center">
        <small>6</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 transition border place-items-center hover:bg-indigo-500 hover:text-white">
        <small>7</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 text-gray-300 transition border cursor-not-allowed place-items-center">
        <small>8</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 text-gray-300 transition border cursor-not-allowed place-items-center">
        <small>9</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 transition border place-items-center hover:bg-indigo-500 hover:text-white">
        <small>10</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 transition border place-items-center hover:bg-indigo-500 hover:text-white">
        <small>11</small>
        </a>
        <a href="javascript:void(0);" class="grid px-3 py-2 transition border place-items-center hover:bg-indigo-500 hover:text-white">
        <small>12</small>
        </a>
    </div>
    </div>
    </div>
    <div class="text-indigo-500">
    <small class="uppercase">women's running shoe</small>
    <h3 class="text-2xl font-medium text-black uppercase">nike epic react flyknit</h3>
    <h3 class="text-2xl font-semibold mb-7">$150</h3>
    <small class="text-black">The Nike Epic React Flyknit 1 provides crazy comfort that lasts as long as you can run. Its Nike React foam cushioning is responsive yet lightweight, durable yet soft. This attraction of opposites creates a sensation that not only enhances the feeling of moving forwards, but makes running feel fun, too.</small>
    <div class="flex gap-0.5 mt-4">
        <button id="addToCartButton" class="px-8 py-3 text-white uppercase transition bg-indigo-600 hover:bg-indigo-500 focus:outline-none">add to cart</button>
        <button id="likeButton" class="p-3 text-white uppercase transition bg-indigo-600 hover:bg-indigo-500 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
<path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
</svg>
        </button>
    </div>
    </div>
</section>
</main>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const likeButton = document.querySelector("#likeButton");
    const addToCartButton = document.querySelector("#addToCartButton");
    likeButton.addEventListener("click", ()=>{
        likeButton.classList.toggle("text-red-400")
    })
    addToCartButton.addEventListener("click", ()=>{
    const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})

Toast.fire({
icon: 'success',
title: 'Added to cart'
})
    })

</script> --}}
        @endforeach
    </div>
    @else
    <div class="w-full p-2 mt-5 text-2xl text-center">
        <h3 class="font-bold">AÚN NO TENEMOS PRODUCTOS EN ESTA CATEGORÍA</h3>
    </div>
    @endif

</div>
