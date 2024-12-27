<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Agora 'about' refere-se a uma rota nomeada.
    $aboutPageUrl = route('about');

    dd($aboutPageUrl);

    return view('welcome');
});

// Nomeando a rota '/about'
Route::view('/about', 'about')->name('about');
