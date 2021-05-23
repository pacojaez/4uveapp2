<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
    <form wire:submit.prevent="" class="flex flex-col">
        <label for="name" class="block">
            <span class="text-gray-700">Nombre</span>
            <input class="block w-full mt-1 form-input" wire:model="name" placeholder="Sherlock Holmes" id="name" type="text" autocomplete="off" required>
        </label>

        <label for="email" class="block mt-4">
            <span class="text-gray-700">Email</span>
            <input class="block w-full mt-1 form-input" wire:model="email" placeholder="detective@bakerst.io" id="email" autocomplete="off" type="email" required>
        </label>

        <label for="phone" class="hidden mt-4 sm:block">
            <span class="text-gray-700">Teléfono</span>
            <input class="block w-full mt-1 form-input" wire:model="phone" placeholder="+1 240-824-1243" id="phone" autocomplete="off" type="tel">
        </label>

        <div class="hidden mt-4 sm:block">
            <span class="text-gray-700">Forma de Contacto</span>
            <div class="mt-2 text-gray-500">
                <label class="inline-flex items-center cursor-pointer">
                    <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="0" checked>
                    <span class="ml-2 select-none">Email</span>
                </label>
                <label class="inline-flex items-center ml-6 cursor-pointer">
                    <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="1">
                    <span class="ml-2 select-none">Teléfono</span>
                </label>
            </div>
        </div>

        <label class="block mt-4">
            <span class="text-gray-700">Asunto</span>
            <textarea class="block w-full mt-1 form-textarea" wire:model="message" rows="3"
                placeholder="Why not write us a little message."></textarea>
        </label>

        <button class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
            Enviar
        </button>
    </form>
</div>
