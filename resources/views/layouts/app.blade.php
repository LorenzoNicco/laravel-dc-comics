<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        <header class="text-center">
            HEADER
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="text-center">
            FOOTER
        </footer>
    </body>
</html>