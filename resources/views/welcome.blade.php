<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @livewireStyles
        @vite('resources/css/app.css')
        <title>Trakt.tv duplicate removal</title>
    </head>
    <body class="antialiased">
        @livewireScripts
        <div class="flex items-center justify-center h-screen">
            <a href="/#" class="hover:bg-blue-400 group flex items-center
             rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2">
                Login in with trakt
            </a>
        </div>
    </body>
</html>
