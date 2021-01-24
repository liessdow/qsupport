<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        @livewireStyles
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
        <nav>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-14">
                <div class="flex items-center justify-between h-16">
                    <div class="flex flex-row items-center">
                        <span class="font-bold text-3xl text-yellow-500">qSupport</span>
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>
