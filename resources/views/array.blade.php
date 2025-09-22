<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <style>
            </style>
    </head>
    <body>
        <h1>Заголовок</h1>

        <div class="container">
            @for($i = 1; $i <= 12; $i++)
            <div class="card">
                <img src="{{ Vite::asset('resources/img/1.png') }}" alt="мем">

                <h2>Карточка {{ $i }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, perspiciatis quae ut dicta inventore perferendis iusto deleniti placeat reiciendis reprehenderit sunt aliquam accusantium repudiandae minus soluta vero, quia facilis. Consequatur!</p>
            </div>
            @endfor
        </div>

        <h1>Main</h1>
        <a href="{{route('about')}}">About</a>
        <a href="/contacts">Contacts</a>
    </body>
</html>
