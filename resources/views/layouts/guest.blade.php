<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LuxSpace</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="icon" href="{{ url('/frontend/favicon.png') }}" />
        <link rel="icon" href="favicon.ico"><link href="{{ url('/frontend/css/app.minify.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ url('/frontend/images/content/favicon.png') }}" />
        <link rel="apple-touch-icon" href="{{ url('/frontend/images/content/favicon.png') }}" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
