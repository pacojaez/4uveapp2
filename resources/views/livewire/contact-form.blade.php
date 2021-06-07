<div>
    <div class="fixed top-0 z-10 mt-4 ml-2 left-1/2">
        @if (session()->has('contact-lead-message'))
        <div class="px-4 py-2 text-sm font-semibold text-green-900 bg-green-500 border border-green-600 rounded-md">
            {{ session('contact-lead-message') }}
        </div>
        @endif
    </div>
    <div class="w-5/6 p-6 m-auto border-t border-gray-200 dark:border-gray-700 md:border-l">
        <form wire:submit.prevent="submit" class="flex flex-col" id="contact-form" method="POST">
            {{-- <input type="hidden" name="recaptcha" id="recaptcha"> --}}
            <label for="name" class="block">
                <span class="text-gray-700">Nombre</span>
                <input class="block w-full mt-1 form-input" wire:model="name" placeholder="Tu nombre" id="name"
                    type="text" autocomplete="off" required>
            </label>
            @error('name') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

            <label for="email" class="block mt-4">
                <span class="text-gray-700">Email</span>
                <input class="block w-full mt-1 form-input" wire:model="email" placeholder="Tu mail" id="email"
                    autocomplete="off" type="email" required>
            </label>
            @error('email') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

            <label for="phone" class="mt-4 sm:block">
                <span class="text-gray-700">Teléfono</span>
                <input class="block w-full mt-1 form-input" wire:model="phone" placeholder="Tu teléfono" id="phone"
                    autocomplete="off" type="tel">
            </label>
            @error('phone') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

            <div class="mt-4 sm:block">
                <span class="text-gray-700">Forma de Contacto</span>
                <div class="mt-2 text-gray-500">
                    <label class="inline-flex items-center cursor-pointer">
                        <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="0"
                            checked>
                        <span class="ml-2 select-none">Email</span>
                    </label>
                    <label class="inline-flex items-center ml-6 cursor-pointer">
                        <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="1">
                        <span class="ml-2 select-none">Teléfono</span>
                    </label>
                </div>
                @error('preferred') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
            </div>

            <label class="block mt-4">
                <span class="text-gray-700">Asunto</span>
                <textarea class="block w-full mt-1 form-textarea" wire:model="message" rows="3"
                    placeholder="Déjanos tus dudas o sugerencias y nos pondremos en contacto contigo a la mayor brevedad posible."></textarea>
            </label>
            @error('message') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

            <div
                class="px-4 py-2 m-auto mt-8 font-semibold text-center text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100 ">
                {!! NoCaptcha::displaySubmit('contact-form', 'ENVIAR', ['data-theme' => 'dark']) !!}
            </div>

            {{-- {!! NoCaptcha::display() !!} --}}
            {{-- {!! NoCaptcha::renderJs('es', true, 'recaptchaCallback') !!}
            {!! NoCaptcha::displaySubmit('contact-form', 'submit now!') !!}
            {!! NoCaptcha::display() !!} --}}

            @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
            @endif

            {{-- <button class="g-recaptcha" data-sitekey="6LcSUhQbAAAAADz9NUIlcAE5atKkdHHcLZLVOPmT" data-callback='onSubmit'
                data-action='submit'>
                ENVIAR
            </button> --}}
            {{-- <div class="g-recaptcha" data-sitekey="6LcSUhQbAAAAADz9NUIlcAE5atKkdHHcLZLVOPmT"></div> --}}
            {{-- <button
                class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow g-recaptcha hover:bg-gray-100"
                data-action='submit'>Submit</button> --}}
        </form>
    </div>
    {{-- @push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
        grecaptcha.ready(function() {
                 grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                      document.getElementById('recaptcha').value = token;
                    }
                 });
             });
    </script>
    @endpush --}}
</div>
