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
        <!-- <link rel="stylesheet" href="{{ config('app.url'). mix('css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ config('app.url').'/css/output.css'}}">
        <link rel="stylesheet" href="{{ config('app.url'). '/css/styles.css' }}">
        <!-- <link rel="stylesheet" href="output.css"> -->
        <link rel="stylesheet" href="{{ config('app.url'). '/css/estilosvalidacion.css' }}">
        <!-- <link rel="stylesheet" href="estilos.css"> -->
        <script src="https://kit.fontawesome.com/6d72c45872.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        <script src="{{config('app.url'). mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <main class="container mx-auto min-h-screen" id="main">
        <header id="header">
        <nav id="menusup" class="container h-28 flex mt-3">
                    <div id="logo" class="h-full itemnav flex">
                        <img class="cursor-pointer" src="img/logo.png" alt="">
                    </div>
                    <ul class="itemnav flex">
                        <li class="text-white grow text-center"><a href="">Interescolar</a></li>
                        <li class="text-white grow text-center"><a href="">Race</a></li>
                        <li class="text-white grow text-center"><a href="">Clasico</a></li>
                    </ul>
                    <div id="buttons" class="itemnav flex justify-end text-white font-bold">
                        <a class="text-right bg-yellow-400 rounded-md" href="register.php">Registrarse</a>
                        <a id="suplogbot" class="text-right rounded-md" href="login.php">Inicia sesion</a>
                    </div>
        </nav>
        </header>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <footer id="footer" class="container pb-10">
            <div id="contentfoot" class="flex justify-between">
            <div class="grow" id="menudown">
                <ul id="" class="flex justify-between text-white">
                    <li><a href="">¿Como jugar?</a></li>
                    <li><a href="">Reglas</a></li>
                    <li><a href="">Legal</a></li>
                    <li><a href="">Libro de reclamaciones</a></li>
                    <li><a href="">Apoyo</a></li>
                </ul>
            </div>
            <div class="grow" id="footernet">
                <ul class="flex justify-end text-white">
                    <li class="pl-5"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="pl-5"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="pl-5"><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                    <li class="pl-5"><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            </div>
        </footer>
</main>
<!-- <script src="public/js/formulario.js"></script>  -->
<script src="{{config('app.url').'/js/formulario.js'}}" defer></script>
    </body>
</html>
