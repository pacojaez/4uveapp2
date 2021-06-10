<div class="w-full text-gray-100 bg-gray-500 shadow body-font">
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <div class="flex flex-wrap items-center text-sm lg:w-full md:ml-auto">
            @foreach ($categories as $categorie )
                <x-jet-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <span class="inline-flex mr-4 text-xl text-gray-300 border-b border-transparent rounded-md cursor-pointer font-title hover:text-gray-900 hover:border-red-600">
                            {{-- <a href="{{ route('categorieproducts', ['id' => $categorie->id] ) }}" :active="request()->routeIs('categorieproducts', ['name'=>$categorie->id])"
                                class="mr-4 border-b border-transparent cursor-pointer hover:text-gray-900 hover:border-indigo-600"> --}}
                                {{$categorie->name}}
                            {{-- </a> --}}
                            {{-- <a class="mr-4 border-b border-transparent cursor-pointer hover:text-gray-900 hover:border-indigo-600">{{$categorie->name}}</a> --}}
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
