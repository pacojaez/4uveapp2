{{-- <div class="md:container md:mx-auto">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-12 mt-4">
        Producto: {{ __($product->name)  }}
    </h2>
    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
        href="">
        <div class="p-5 bg-red-400">
            <div class="md:flex-shrink-0 bg-green-500 mb-2 justify-between">
                <div class="h-2/3 object-cover md:w-48">
                    <img src="https://images.unsplash.com/photo-1557154683-264bf969e849?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3RhdGlvbmVyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Man looking at item at a store">
                </div>
                <div class="h-1/2 md:w-48 bg-blue">
                </div>
            </div>
            <div class="flex justify-between bg-green-100 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>                  
                <div class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                    <span class="flex items-center">30%</span>
                </div>
            </div>
            <div class="md:flex-shrink-0 bg-green-500">
                <img class="h-48 w-full object-cover md:w-48" src="https://images.unsplash.com/photo-1557154683-264bf969e849?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3RhdGlvbmVyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Man looking at item at a store">
            </div>
            <div class="ml-2 w-full flex-1 bg-green-100 mb-3">
                <div>
                <div class="mt-3 text-3xl font-bold leading-8">{{$product->invoice_cost_price}} €</div>
                <div class="mt-1 text-base text-gray-600">{{$product->name}}</div>
                </div>
            </div>
            
        </div>
    </a>
</div> 
<!-- component -->--}}
<div>
    <div class="w-full m-4 p-2 rounded shadow-lg overflow-hidden text-center">
		<h2 class="text-4xl">Producto <span class="font-bold">{{ $product->name}}</span></h2>
	</div>
   <div class="flex flex-wrap justify-center sm:w-full md:w-full lg:w-full xl:w-full">     
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden text-center items-center">
		<img src="https://images.unsplash.com/photo-1557154683-264bf969e849?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3RhdGlvbmVyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
		{{-- <div class="font-bold text-4xl m-1 underline px-6 py-2"><a href="">Example Title</a></div> --}}
		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
		<div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200"><span class="underline">Description:</span> {{$product->short_description}} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi deserunt nostrum dignissimos ut provident praesentium assumenda repellat eum dolorum totam, illo quisquam est voluptas nemo. Necessitatibus nobis eveniet maiores dicta modi </div>
        <div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200">
            <span class="underline">Part Number:</span> {{$product->part_number}}
        </div>
        <div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200">     
            <span class="underline">EAN-13:</span> el EAN-13 del producto
        </div>

		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
        <h3>DESCRIPCIÓN: </h3>
		<div class="font-bold text-xl m-1 px-6 py-2">{{$product->description}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum atque quis ab, officia maiores dolor voluptatem at. Placeat, similique ut! Molestias possimus officia exercitationem esse deleniti enim nemo vel consequatur, eaque, doloribus dolor ea expedita nisi? Assumenda magnam eius culpa! Harum blanditiis minima molestias. Mollitia magni voluptates at vero pariatur.</div>
		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden text-center items-center">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
		<div class="font-bold text-xl m-1 underline px-6 py-2">select CANTIDAD</div>
        <input type="button" value="ADD TO CART" class="button text-black bg-blue-500 m-1 p-4 hover:bg-blue-300 rounded-xl pointer">
        {{-- <div class="font-bold text-xl m-1 underline px-6 py-2">Button añadir al carrito</div> --}}
		{{-- <label class="uploader px-6 pb-4 flex text-lg">
			<input type="button" value="ADD TO CART" class="button text-black bg-blue-500 m-1 p-4 hover:bg-blue-300 rounded-xl pointer">
			{{-- <input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/> --}}
		{{-- </label> --}}
	</div>
    <div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
        <h3>Producto definición: </h3>
		<div class="text-xl m-1 px-6 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe mollitia expedita at cum incidunt adipisci sit! Tempore nisi sequi doloribus corporis a porro rerum necessitatibus, iste reprehenderit dolor consectetur assumenda laudantium. Magni dicta, consequatur id tempore vitae amet reprehenderit nobis voluptate totam harum delectus ipsum non veritatis necessitatibus esse! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum atque quis ab, officia maiores dolor voluptatem at. Placeat, similique ut! Molestias possimus officia exercitationem esse deleniti enim nemo vel consequatur, eaque, doloribus dolor ea expedita nisi? Assumenda magnam eius culpa! Harum blanditiis minima molestias. Mollitia magni voluptates at vero pariatur.</div>
		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden text-center items-center">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
		<div class="font-bold text-xl m-1 underline px-6 py-2">
            <h3>SUBCATEGORÍA PRODUCTO CON ENLACE A ESA SUBCATEGORIA</h3>
        </div>
        <div class="font-bold text-xl m-1 underline px-6 py-2">
            <h3>CATEGORÍA PRODUCTO CON ENLACE A ESA CATEGORIA</h3>
        </div>
        {{-- <input type="button" value="ADD TO CART" class="button text-black bg-blue-500 m-1 p-4 hover:bg-blue-300 rounded-xl pointer"> --}}
        {{-- <div class="font-bold text-xl m-1 underline px-6 py-2">Button añadir al carrito</div> --}}
		{{-- <label class="uploader px-6 pb-4 flex text-lg">
			<input type="button" value="ADD TO CART" class="button text-black bg-blue-500 m-1 p-4 hover:bg-blue-300 rounded-xl pointer">
			{{-- <input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/> --}}
		{{-- </label> --}}
	</div>
    <div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden text-center items-center">
		<img src="https://images.unsplash.com/photo-1557154683-264bf969e849?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3RhdGlvbmVyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
		{{-- <div class="font-bold text-4xl m-1 underline px-6 py-2"><a href="">Example Title</a></div> --}}
		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
	<div class="sm:w-full md:w-full lg:w-2/5 xl:w-2/5 m-3 rounded shadow-lg overflow-hidden">
		{{-- <img src="https://picsum.photos/1000/600"> --}}
		<div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200"><span class="underline">EMBALAJE:</span> {{$product->short_description}} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi deserunt nostrum dignissimos ut provident praesentium assumenda repellat eum dolorum totam, illo quisquam est voluptas nemo. Necessitatibus nobis eveniet maiores dicta modi </div>
        {{-- <div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200">
            <span class="underline">Part Number:</span> {{$product->part_number}}
        </div>
        <div class="font-bold text-xl m-1 px-6 py-2 bg-gray-200">     
            <span class="underline">EAN-13:</span> el EAN-13 del producto
        </div> --}}

		{{-- <label class="uploader px-6 pb-4 flex items-center text-lg">
			<input type="button" value="Action 1" class="button text-white bg-blue m-1 p-4 hover:bg-blue-dark">
			<input type="button" value="Action 2" class="button text-white bg-green-dark m-1 p-4 hover:bg-green-darker"/>
			<input type="button" value="Action 3" class="button text-white bg-red m-1 p-4 hover:bg-red-dark"/>
		</label> --}}
	</div>
    </div> 
</div>

