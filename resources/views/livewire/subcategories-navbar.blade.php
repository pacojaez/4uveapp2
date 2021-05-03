<div class="w-40 ml-2">
    <!-- SUBCATEGORIES -->
    @foreach ($subcategories as $subcategorie)
    <x-jet-dropdown-link href=" ">
        {{ $subcategorie->name }}
    </x-jet-dropdown-link>
    @endforeach
</div>