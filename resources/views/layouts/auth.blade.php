<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/logo/logo.png">

    <title>{{ $title . ' | CODER' ?? 'CODER' }}</title>

    {{-- JQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-black">
    <main class="relative md:overflow-y-hidden overflow-y-visible">
        <img src="assets/images/shape/ellipse-2.png" alt="" class="absolute bottom-0 left-0 w-1/2">
        <img src="assets/images/shape/ellipse-1.png" alt="" class="absolute -top-60 right-0 w-1/2">
        {{ $slot }}
    </main>

    {{-- Iconify --}}
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    @livewireScripts

    @stack('js-custom')
</body>

</html>
