<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/interescolar', function () {
    return view('interescolar');
});
Route::get('/perfil', function () {
    return view('myprofile');
});
Route::get('/interacces', function () {
    return view('interacces');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
