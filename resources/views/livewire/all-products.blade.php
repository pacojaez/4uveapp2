<div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-12 mt-4">
            {{ __('Todos nuestros Productos')  }}
        </h2>
        <div class="justify-items-center bg-gray-300 mx-8 p-2 font-semibold">
            {{ $products->links() }}
        </div>
        <div class="grid grid-cols-12 gap-6 m-5 bg-gray-200 p-2 rounded">
            @foreach($products as $product)
                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                    href="{{ route('singleproduct', ['id' => $product->id]) }}">
                    
                    <div class="p-5">
                        <div class="flex justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            
                            <div
                                class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                <span class="flex items-center">30%</span>
                            </div>
                        </div>
                        <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:w-48" src="https://images.unsplash.com/photo-1557154683-264bf969e849?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3RhdGlvbmVyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Man looking at item at a store">
                          </div>
                        <div class="ml-2 w-full flex-1">
                            <div>
                                <div class="mt-3 text-3xl font-bold leading-8">{{$product->invoice_cost_price}} €</div>

                                <div class="mt-1 text-base text-gray-600">{{$product->name}}</div>
                            </div>
                        </div>
                    </div>
                </a>
        

    {{-- <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                        <div class="flex justify-end">
                            <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">Detached house • 5y old</p>
                        <p class="text-3xl text-gray-900">$750,000</p>
                        <p class="text-gray-700">742 Evergreen Terrace</p>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">3</span> Bedrooms</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">2</span> Bathrooms</p>
                        </div>
                    </div>
                    <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                        <div class="flex items-center pt-2">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
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
    {{-- <main class="grid place-items-center h-screen bg-gray-100 mt-0">
    <section class="flex flex-col md:flex-row gap-11 py-2 px-5 bg-white rounded-md shadow-lg w-3/4 md:max-w-2xl">
        <div class="text-indigo-500 flex flex-col justify-between">
        <img src="https://images.stockx.com/Nike-Epic-React-Flyknit-2-White-Pink-Foam-W-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1603481985" alt="" />
        <div>
            <small class="uppercase">choose size</small>
        <div class="flex flex-wrap md:flex-nowrap gap-1">
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 hover:bg-indigo-500 hover:text-white transition">
            <small>5</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 cursor-not-allowed text-gray-300 transition">
            <small>6</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 hover:bg-indigo-500 hover:text-white transition">
            <small>7</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 cursor-not-allowed text-gray-300 transition">
            <small>8</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 cursor-not-allowed text-gray-300 transition">
            <small>9</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 hover:bg-indigo-500 hover:text-white transition">
            <small>10</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 hover:bg-indigo-500 hover:text-white transition">
            <small>11</small>
            </a>
            <a href="javascript:void(0);" class="grid place-items-center border px-3 py-2 hover:bg-indigo-500 hover:text-white transition">
            <small>12</small>
            </a>
        </div>
        </div>
        </div>
        <div class="text-indigo-500">
        <small class="uppercase">women's running shoe</small>
        <h3 class="uppercase text-black text-2xl font-medium">nike epic react flyknit</h3>
        <h3 class="text-2xl font-semibold mb-7">$150</h3>
        <small class="text-black">The Nike Epic React Flyknit 1 provides crazy comfort that lasts as long as you can run. Its Nike React foam cushioning is responsive yet lightweight, durable yet soft. This attraction of opposites creates a sensation that not only enhances the feeling of moving forwards, but makes running feel fun, too.</small>
        <div class="flex gap-0.5 mt-4">
            <button id="addToCartButton" class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase px-8 py-3">add to cart</button>
            <button id="likeButton" class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase p-3">
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
</div>