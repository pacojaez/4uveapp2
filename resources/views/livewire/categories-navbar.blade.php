<div class="text-gray-100 bg-gray-500 body-font shadow w-full">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <div class="flex lg:w-full flex-wrap items-center text-sm md:ml-auto">
            @foreach ($categories as $categorie )
                <x-jet-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md mr-4 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">
                            {{-- <a href="{{ route('categorieproducts', ['id' => $categorie->id] ) }}" :active="request()->routeIs('categorieproducts', ['name'=>$categorie->id])"
                                class="mr-4 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600"> --}}
                                {{$categorie->name}}
                            {{-- </a> --}}
                            {{-- <a class="mr-4 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">{{$categorie->name}}</a> --}}
                        </span>
                    </x-slot>
                   
                    <x-slot name="content"> 
                        @livewire('subcategories-navbar', ['id' => $categorie->id])
                    </x-slot>
                </x-jet-dropdown>
            @endforeach
        </div>
    </div>
</div>
