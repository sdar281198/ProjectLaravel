<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ config('app.url'). mix('css/app.css') }}"> -->
    <link rel="stylesheet" href="{{ config('app.url').'/css/output.css'}}">
    <link rel="stylesheet" href="{{ config('app.url'). '/css/styles.css' }}">
    <link rel="stylesheet" href="{{ config('app.url'). '/css/responsive.css' }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/6d77af7104.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Scripts -->
    <script src="{{config('app.url'). mix('js/app.js') }}"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body id="body" class="body">
<div id="mobileMenu" class="flex flex-col justify-center items-center menu">
        <div id="hambMenuClose" clas="">
            <i class="fa-solid fa-xmark cursor-pointer"></i>
        </div>
        <ul class="flex flex-col justify-center text-center">
            <li><a href="" class="flex justify-center text-white">Interescolar</a></li>
            <li><a href="" class="flex justify-center text-white">Race</a></li>
            <li><a href="" class="flex justify-center text-white">Clasico</a></li>
        </ul>
        <div id="buttonsMobile" class="flex flex-col items-center justify-center">
            <li class="list-none"><a href="./register.php" class="flex justify-center text-white">Registrate</a></li>
            <li class="list-none"><a href="./login.php" class="flex justify-center uppercase italic text-white">Iniciar sesion</a></li>
        </div>
    </div>
<main id="main" class="container h-max overflow-hidden mx-auto box-border">
