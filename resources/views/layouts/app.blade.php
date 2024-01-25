<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Surat Online Bulakan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" style="background-image: url('{{ asset('img/balaiDesa.jpeg') }}'); background-size: cover; background-position: center;">
            @yield('navbar')
            <!-- Page Heading -->
            @yield('header')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="text-center text-sm text-gray-500 bg-gray-200 py-2">
            &copy; {{ date('Y') }} Surat Online Desa Bulakan created By BNW KKN UNDIP.
        </footer>
    </body>
</html>
