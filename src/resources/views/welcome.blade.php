<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">
                            <button class="btn-primary p-2 rounded">Inicio</button>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                            <button class="btn-primary p-2 rounded">Iniciar Sesion</button>
                        </a>
                    @endauth
                </div>
            @endif
                <div class="p-9 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="h-20 w-20" src="{{asset('images/logo.png')}}" alt="CheckMeLogo">
                    </div>
                    <div>
                        <div class="text-xl font-medium text-black">ChekMe-Boss</div>
                        <p class="text-gray-500">Vamos a empezar!</p>
                    </div>
                </div>
        </div>
    </body>
</html>
