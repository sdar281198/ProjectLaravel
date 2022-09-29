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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/6d77af7104.js" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/784d868413.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Scripts -->
    <script src="{{config('app.url'). mix('js/app.js') }}"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body id="body" class="body">
<x-mobilemenu/>
<x-ranking/>
<x-fail/>
<x-correct/>
<x-completed/>
<x-formalumn/>
<x-formworker/>
<x-mobilemenuform/>
<main id="main" class="container h-max overflow-hidden mx-auto box-border">
