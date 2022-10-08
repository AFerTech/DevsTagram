<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>DevsTagram - @yield('titulo')</title>
    </head>
    <body>
        <nav>
            <a href="/">Principal</a>
            <a href="/nosotros">Nosotros</a>
            <a href="tienda">Tienda</a>
        </nav>

        <h1>@yield('titulo')</h1>

        <h2>@yield('contenido')</h2>
    </body>
    
</html>   