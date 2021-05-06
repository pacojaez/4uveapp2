<div class="w-40 ml-2">
    <!-- SUBCATEGORIES -->
    @foreach ($subcategories as $subcategorie)
    <x-jet-dropdown-link href=" ">
    {{-- <a href="{{ route('categorieproducts', ['id' => $categorie->id] ) }}" :active="request()->routeIs('categorieproducts', ['name'=>$categorie->id])"
                                class="mr-4 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600"> --}}
            <x-jet-nav-link href="{{ route('categorieproducts', ['id' => $subcategorie->id] ) }}" class="font-bold m-5">
                {{ $subcategorie->name }}
            </x-jet-nav-link>
        {{-- {{ $subcategorie->name }} --}}
    </x-jet-dropdown-link>
    @endforeach
</div>