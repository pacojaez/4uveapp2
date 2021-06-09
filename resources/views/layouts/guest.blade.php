<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @livewireStyles
    <!-- Alpine CDN -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Scripts -->
    {{-- <script src="{{ asset(mix('js/app.js')) }}" defer data-turbolinks-track="reload"></script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans antialiased text-gray-900 bg-yellow-300">
        {{ $slot }}
    </div>
    @livewire('footer')
    <!--Cookie Consent-->
    @include('cookie-consent::index')

    @livewireUIScripts
    @livewire('livewire-ui-modal')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
