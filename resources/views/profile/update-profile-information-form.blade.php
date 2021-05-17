<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="object-cover w-20 h-20 rounded-full">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block w-20 h-20 rounded-full"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- surname -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="surname" value="{{ __('Apellidos') }}" />
            <x-jet-input id="surname" type="text" class="block w-full mt-1" wire:model.defer="state.surname" autocomplete="phone" />
            <x-jet-input-error for="surname" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="block w-full mt-1" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
            <x-jet-input id="phone" type="text" class="block w-full mt-1" wire:model.defer="state.phone" autocomplete="phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>

        <!-- Company -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="company" value="{{ __('Empresa') }}" />
            <x-jet-input id="company" type="text" class="block w-full mt-1" wire:model.defer="state.company" autocomplete="company" />
            <x-jet-input-error for="company" class="mt-2" />
        </div>

        <!-- Comercial_name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="comercial_name" value="{{ __('Nombre Comercial') }}" />
            <x-jet-input id="comercial_name" type="text" class="block w-full mt-1" wire:model.defer="state.comercial_name" autocomplete="comercial_name" />
            <x-jet-input-error for="comercial_name" class="mt-2" />
        </div>

        <!-- CIF -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="CIF" value="{{ __('CIF') }}" />
            <x-jet-input id="CIF" type="text" class="block w-full mt-1" wire:model.defer="state.CIF" autocomplete="CIF" />
            <x-jet-input-error for="CIF" class="mt-2" />
        </div>

        <!-- Adress -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="adress" value="{{ __('Dirección') }}" />
            <x-jet-input id="adress" type="text" class="block w-full mt-1" wire:model.defer="state.adress" autocomplete="adress" />
            <x-jet-input-error for="adress" class="mt-2" />
        </div>

        <!-- City -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="city" value="{{ __('Población') }}" />
            <x-jet-input id="city" type="text" class="block w-full mt-1" wire:model.defer="state.city" autocomplete="city" />
            <x-jet-input-error for="city" class="mt-2" />
        </div>

        <!-- cp -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
            <x-jet-input id="cp" type="text" class="block w-full mt-1" wire:model.defer="state.cp" autocomplete="cp" />
            <x-jet-input-error for="cp" class="mt-2" />
        </div>

        <!--  Provincia -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="province" value="{{ __('Provincia') }}" />
            <x-jet-input id="province" type="text" class="block w-full mt-1" wire:model.defer="state.province" autocomplete="province" />
            <x-jet-input-error for="province" class="mt-2" />
        </div>

        <!-- Tipo Usuario -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tipo_usuario" value="{{ __('Tipo de Usuario') }}" />
            {{-- <x-jet-input id="tipo_usuario" type="text" class="block w-full mt-1" wire:model.defer="state.tipo_usuario" autocomplete="tipo_usuario" /> --}}
            <select class="form-control" id="tipo_usuario" name="tipo_usuario" class="border rounded" wire:model.defer="state.tipo_usuario" autocomplete="tipo_usuario">                <option value="Papeleria" selected>Papelería</option>
                <option value="Cadena de Papelerias">Cadena de Papelerías</option>
                <option value="Suministrador a Oficinas con Punto de Venta">Suministrador a Oficinas con Punto de Venta</option>
                <option value="Suministrador a Colegios con Almacen">Suministrador a Colegios con Almacén</option>
                <option value="Suministrador a Oficinas con Almacen">Suministrador a Oficinas con Almaén</option>
                <option value="Mayorista">Mayorista</option>
                <option value="Mayorista con Punto de Venta">Mayorista con Punto de Venta</option>
                <option value="Importador">Importador</option>
                <option value="Fabricante">Fabricante</option>
                <option value="Distribuidor">Distribuidor</option>
            </select>
            <x-jet-input-error for="tipo_usuario" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
